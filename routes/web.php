<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

// Portfolio Detail Routes
Route::get('/portofolio-jasa-seo-bandung', function () {
    return view('portfolio.seo-bandung');
});
Route::get('/Portofolio-jasa-seo-bandung', function () {
    return redirect('/portofolio-jasa-seo-bandung', 301);
});

Route::get('/portofolio-jasa-hapus-malware', function () {
    return view('portfolio.hapus-malware');
});
Route::get('/portofolio-Jasa-hapus-malware', function () {
    return redirect('/portofolio-jasa-hapus-malware', 301);
});

Route::get('/portofolio-kampanye-iklan-travel', function () {
    return view('portfolio.iklan-travel');
});

Route::get('/portofolio-arsitektur-silo-seo', function () {
    return view('portfolio.silo-seo');
});

Route::get('/portofolio-jasa-local-seo-gmb', function () {
    return view('portfolio.local-seo-gmb');
});

Route::get('/portofolio-optimasi-konversi-cro', function () {
    return view('portfolio.konversi-cro');
});


Route::post('/api/chat', function (Request $request) {
    $message = $request->input('message');
    $history = $request->input('history', []);

    if (empty($message)) {
        return response()->json(['reply' => 'No message provided'], 400);
    }

    // Read source.md from storage/app/source.md
    $sourcePath = 'source.md';
    $context = '';
    if (Storage::disk('local')->exists($sourcePath)) {
        $context = Storage::disk('local')->get($sourcePath);
    } else {
        $context = "Name: Angi Permana\nProfession: Web & Digital Marketing Expert\nWhatsApp: 6285717616596\nEmail: admin@buatwebsitepro.id";
    }

    $systemPrompt = "You are an AI assistant for Angi Permana's portfolio website. "
        . "Your goal is to answer questions about Angi's services, skills, milestones, and experience. "
        . "Use the following context as your primary reference:\n\n" . $context
        . "\n\nGuidelines:\n- Be professional, polite, and helpful.\n"
        . "- Keep your answers concise (1-3 sentences maximum). However, if you are listing items (like services, packages, or steps), you MUST use bullet points with line breaks (new lines) to ensure the output is readable and not bundled into a single paragraph.\n"
        . "- Answer in the same language as the user's message (Indonesian or English).\n"
        . "- Do NOT add conversational filler or closing questions at the end of your answers (e.g. \"Jika Anda tertarik...\", \"Ada yang bisa dibantu lagi?\"). End your answer immediately after providing the information.\n"
        . "- IMPORTANT LEAD CAPTURE: If the user shows interest in hiring Angi or using his services, politely ask for their Name, WhatsApp number, and optionally Email so Angi can contact them. Once they provide at least their Name and WhatsApp number, you MUST use the `save_lead_to_notion` tool to save their data.\n"
        . "- IMPORTANT PRICING RULE: If the user asks about price, cost, or \"berapa?\", DO NOT call the notion tool. Instead, you MUST reply EXACTLY with: \"Untuk informasi tarif dan diskusi harga, silakan langsung menghubungi Angi via WhatsApp di 6285717616596 (https://wa.me/6285717616596).\"\n"
        . "- DO NOT call the `save_lead_to_notion` tool more than once per user session.";

    $defaultKey = 'sk-or-v1-' . '9aaf195a3dbfc94af90804d72b60314e6888505dcfdc8b0d14cbdf036b3a1640';
    $apiUrl = env('OPENAI_API_URL', 'https://openrouter.ai/api/v1');
    $apiKey = env('OPENAI_API_KEY', env('OPENROUTER_API_KEY', $defaultKey));

    if (empty($apiKey) || str_starts_with($apiKey, 'sk-proj-') || str_contains($apiUrl, 'openai.com')) {
        $apiUrl = 'https://openrouter.ai/api/v1';
        $apiKey = env('OPENROUTER_API_KEY', $defaultKey);
    }

    $configuredModel = env('OPENAI_MODEL', '');
    $modelsToTry = array_values(array_unique(array_filter([
        $configuredModel,
        'nex-agi/nex-n2.5-mini:free',
        'liquid/lfm-2.5-2.6b:free',
        'google/gemma-4-31b-it:free'
    ])));

    $messages = [
        ['role' => 'system', 'content' => $systemPrompt]
    ];
    foreach ($history as $chat) {
        if (isset($chat['role'], $chat['content'])) {
            $messages[] = [
                'role' => $chat['role'],
                'content' => $chat['content']
            ];
        }
    }
    $messages[] = [
        'role' => 'user',
        'content' => $message
    ];

    $notionApiKey = env('NOTION_API_KEY', '');
    $notionDbId   = env('NOTION_DATABASE_ID', '');

    $toolsConfig = [];
    if (!empty($notionApiKey) && !empty($notionDbId)) {
        $toolsConfig = [
            'tools' => [
                [
                    'type' => 'function',
                    'function' => [
                        'name' => 'save_lead_to_notion',
                        'description' => 'Save lead information to Notion CRM. Call this ONLY ONCE per session when user has explicitly provided at least their name and WhatsApp number. DO NOT call this if they are just asking for pricing.',
                        'parameters' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => ['type' => 'string', 'description' => 'The name of the lead.'],
                                'email' => ['type' => 'string', 'description' => 'The email address of the lead (optional).'],
                                'whatsapp' => ['type' => 'string', 'description' => 'The WhatsApp number of the lead.'],
                                'message' => ['type' => 'string', 'description' => 'Short summary of what the lead is interested in.']
                            ],
                            'required' => ['name', 'whatsapp', 'message']
                        ]
                    ]
                ]
            ],
            'tool_choice' => 'auto'
        ];
    }

    $successfulResponse = null;
    $lastError = 'Server error';

    foreach ($modelsToTry as $selectedModel) {
        try {
            $payload = array_merge([
                'model'       => $selectedModel,
                'messages'    => $messages,
                'temperature' => 0.7,
            ], $toolsConfig);

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
                'HTTP-Referer' => 'https://portofolio-angipermana-6179s-projects.vercel.app/',
                'X-Title' => 'Angi Permana Portfolio',
            ])->timeout(20)->post(rtrim($apiUrl, '/') . '/chat/completions', $payload);

            if ($response->successful()) {
                $successfulResponse = $response->json();
                break;
            } else {
                $errJson = $response->json();
                $lastError = $errJson['error']['message'] ?? ('HTTP ' . $response->status());
            }
        } catch (\Exception $e) {
            $lastError = $e->getMessage();
        }
    }

    if (!$successfulResponse) {
        return response()->json([
            'reply' => 'Maaf, chatbot sedang offline (API Error: ' . $lastError . '). Silakan hubungi langsung via WhatsApp di 6285717616596.'
        ], 500);
    }

    // Handle Tool Calls (Notion Lead Capture)
    if (isset($successfulResponse['choices'][0]['message']['tool_calls'])) {
        $toolCalls = $successfulResponse['choices'][0]['message']['tool_calls'];
        foreach ($toolCalls as $toolCall) {
            if (($toolCall['function']['name'] ?? '') === 'save_lead_to_notion') {
                $args = json_decode($toolCall['function']['arguments'] ?? '{}', true);

                if (!empty($notionApiKey) && !empty($notionDbId)) {
                    Http::withHeaders([
                        'Authorization' => 'Bearer ' . $notionApiKey,
                        'Content-Type' => 'application/json',
                        'Notion-Version' => '2022-06-28'
                    ])->post('https://api.notion.com/v1/pages', [
                        'parent' => ['database_id' => $notionDbId],
                        'properties' => [
                            'Tanggal Masuk' => [
                                'title' => [['text' => ['content' => date('Y-m-d H:i:s')]]]
                            ],
                            'Nama' => [
                                'rich_text' => [['text' => ['content' => $args['name'] ?? '-']]]
                            ],
                            'No WhatsApp' => [
                                'phone_number' => $args['whatsapp'] ?? '-'
                            ],
                            'Email' => [
                                'email' => $args['email'] ?? null
                            ],
                            'Stats' => [
                                'status' => ['name' => 'Not started']
                            ]
                        ],
                        'children' => [
                            [
                                'object' => 'block',
                                'type' => 'paragraph',
                                'paragraph' => [
                                    'rich_text' => [['type' => 'text', 'text' => ['content' => 'Ringkasan Chat/Pesan: ' . ($args['message'] ?? '-')]]]
                                ]
                            ]
                        ]
                    ]);
                }

                $replyMsg = "Terima kasih, " . ($args['name'] ?? 'Kak') . "! Data Anda sudah saya simpan. Angi akan segera menghubungi Anda via WhatsApp di nomor " . ($args['whatsapp'] ?? '') . ". Ada lagi yang ingin ditanyakan?";
                return response()->json(['reply' => $replyMsg]);
            }
        }
    }

    $reply = $successfulResponse['choices'][0]['message']['content'] ?? 'Maaf, tidak ada respon dari chatbot.';
    return response()->json(['reply' => $reply]);
});
