<?php
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// Catch fatal errors and return as JSON
register_shutdown_function(function () {
    $error = error_get_last();
    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        if (!headers_sent()) {
            header('Content-Type: application/json');
            http_response_code(500);
        }
        echo json_encode(['reply' => '[PHP Fatal] ' . $error['message'] . ' in ' . basename($error['file']) . ':' . $error['line']]);
    }
});

// Catch regular errors
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        return;
    }
    if (!headers_sent()) {
        header('Content-Type: application/json');
        http_response_code(500);
    }
    echo json_encode(['reply' => '[PHP Error ' . $errno . '] ' . $errstr . ' in ' . basename($errfile) . ':' . $errline]);
    exit;
});

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['reply' => 'Method not allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$message  = $input['message']  ?? '';
$history  = $input['history']  ?? [];

if (empty($message)) {
    http_response_code(400);
    echo json_encode(['reply' => 'No message provided']);
    exit;
}

// Read source.md for context
$sourcePath = __DIR__ . '/../storage/app/source.md';
$context = file_exists($sourcePath)
    ? file_get_contents($sourcePath)
    : "Name: Angi Permana\nProfession: Web & Digital Marketing Expert\nEmail: admin@buatwebsitepro.id";

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

$apiKey  = getenv('OPENAI_API_KEY')
    ?: (getenv('OPENROUTER_API_KEY')
    ?: (getenv('NINEROUTER_API_KEY')
    ?: (getenv('GEMINI_API_KEY')
    ?: (getenv('GROQ_API_KEY')
    ?: ($_SERVER['OPENAI_API_KEY'] ?? ($_SERVER['NINEROUTER_API_KEY'] ?? ''))))));

$baseUrl = getenv('OPENAI_API_URL') ?: ($_SERVER['OPENAI_API_URL'] ?? 'https://openrouter.ai/api/v1');
$model   = getenv('OPENAI_MODEL')   ?: ($_SERVER['OPENAI_MODEL']   ?? 'google/gemini-2.5-flash:free');
$apiUrl  = rtrim($baseUrl, '/') . '/chat/completions';

$messages = [['role' => 'system', 'content' => $systemPrompt]];
foreach ($history as $chat) {
    if (isset($chat['role'], $chat['content'])) {
        $messages[] = ['role' => $chat['role'], 'content' => $chat['content']];
    }
}
$messages[] = ['role' => 'user', 'content' => $message];

$notionApiKey = getenv('NOTION_API_KEY') ?: ($_SERVER['NOTION_API_KEY'] ?? '');
$notionDbId   = getenv('NOTION_DATABASE_ID') ?: ($_SERVER['NOTION_DATABASE_ID'] ?? '');

$payloadData = [
    'model'       => $model,
    'messages'    => $messages,
    'temperature' => 0.7,
];

// Add tool only if Notion is configured
if (!empty($notionApiKey) && !empty($notionDbId)) {
    $payloadData['tools'] = [
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
    ];
    $payloadData['tool_choice'] = 'auto';
}

$payload = json_encode($payloadData);

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey,
    'HTTP-Referer: https://portofolio-angipermana-6179s-projects.vercel.app/',
    'X-Title: Angi Permana Portfolio',
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 50);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);

if ($response === false) {
    http_response_code(500);
    echo json_encode(['reply' => 'Gagal menghubungi server AI. Error: ' . $curlError]);
    exit;
}

if ($httpCode !== 200) {
    http_response_code(500);
    $errorData = json_decode($response, true);
    $errorMsg = $errorData['error']['message'] ?? substr($response, 0, 200);
    echo json_encode(['reply' => 'API Error ' . $httpCode . ': ' . $errorMsg]);
    exit;
}

$data  = json_decode($response, true);

// Handle Function Calling (Tool Calls)
if (isset($data['choices'][0]['message']['tool_calls'])) {
    $toolCalls = $data['choices'][0]['message']['tool_calls'];
    foreach ($toolCalls as $toolCall) {
        if ($toolCall['function']['name'] === 'save_lead_to_notion') {
            $args = json_decode($toolCall['function']['arguments'], true);
            
            // Send to Notion API
            $notionData = [
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
            ];
            
            $notionOptions = [
                'http' => [
                    'method' => 'POST',
                    'header' => implode("\r\n", [
                        'Authorization: Bearer ' . $notionApiKey,
                        'Content-Type: application/json',
                        'Notion-Version: 2022-06-28'
                    ]),
                    'content' => json_encode($notionData),
                    'ignore_errors' => true,
                ]
            ];
            $notionContext = stream_context_create($notionOptions);
            @file_get_contents('https://api.notion.com/v1/pages', false, $notionContext);
            
            $replyMsg = "Terima kasih, {$args['name']}! Data Anda sudah saya simpan. Angi akan segera menghubungi Anda via WhatsApp di nomor {$args['whatsapp']}. Ada lagi yang ingin ditanyakan?";
            echo json_encode(['reply' => $replyMsg]);
            exit;
        }
    }
}

$reply = $data['choices'][0]['message']['content'] ?? 'Tidak ada respon dari chatbot.';

echo json_encode(['reply' => $reply]);
