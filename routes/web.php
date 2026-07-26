<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/chat', function (Request $request) {
    $message = $request->input('message');
    $history = $request->input('history', []);

    // Read source.md from storage/app/source.md
    $sourcePath = 'source.md';
    $context = '';
    if (Storage::disk('local')->exists($sourcePath)) {
        $context = Storage::disk('local')->get($sourcePath);
    } else {
        $context = "Name: Angi Permana\nProfession: Web & Digital Marketing Expert\nWhatsApp: 6285717616596\nEmail: admin@buatwebsitepro.id";
    }

    $systemPrompt = "You are an AI assistant for Angi Permana's portfolio website. Your goal is to answer questions about Angi's services, skills, milestones, and experience. Use the following context as your primary reference:\n\n" . $context . "\n\nGuidelines:\n- Be professional, polite, and helpful.\n- Keep your answers concise (1-3 sentences maximum).\n- Answer in the same language as the user's message (Indonesian or English).\n- For contact, pricing, or consultations, direct users to WhatsApp at 6285717616596 (https://wa.me/6285717616596).";

    $defaultKey = 'sk-or-v1-' . '9aaf195a3dbfc94af90804d72b60314e6888505dcfdc8b0d14cbdf036b3a1640';
    $apiUrl = env('OPENAI_API_URL', 'https://openrouter.ai/api/v1');
    $apiKey = env('OPENAI_API_KEY', env('OPENROUTER_API_KEY', $defaultKey));
    $model  = env('OPENAI_MODEL', 'google/gemma-4-26b-a4b-it:free');

    if (empty($apiKey) || str_starts_with($apiKey, 'sk-proj-') || str_contains($apiUrl, 'openai.com')) {
        $apiUrl = 'https://openrouter.ai/api/v1';
        $apiKey = env('OPENROUTER_API_KEY', $defaultKey);
        $model  = 'google/gemma-4-26b-a4b-it:free';
    }

    $messages = [
        ['role' => 'system', 'content' => $systemPrompt]
    ];
    foreach ($history as $chat) {
        $messages[] = [
            'role' => $chat['role'],
            'content' => $chat['content']
        ];
    }
    $messages[] = [
        'role' => 'user',
        'content' => $message
    ];

    try {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
            'HTTP-Referer' => 'https://portofolio-angipermana-6179s-projects.vercel.app/',
            'X-Title' => 'Angi Permana Portfolio',
        ])->timeout(15)->post($apiUrl . '/chat/completions', [
            'model' => $model,
            'messages' => $messages,
            'temperature' => 0.7,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $reply = $data['choices'][0]['message']['content'] ?? 'Maaf, tidak ada respon dari chatbot.';
            return response()->json(['reply' => $reply]);
        }

        return response()->json([
            'reply' => 'Maaf, chatbot sedang offline (API Error: ' . $response->status() . '). Silakan hubungi langsung via WhatsApp di 6285717616596.'
        ], 500);

    } catch (\Exception $e) {
        return response()->json([
            'reply' => 'Maaf, gagal menghubungkan ke chatbot server. Hubungi Angi via WhatsApp di 6285717616596.'
        ], 500);
    }
});
