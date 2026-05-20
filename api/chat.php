<?php
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
    . "- Keep your answers concise (1-3 sentences maximum).\n"
    . "- Answer in the same language as the user's message (Indonesian or English).";

$apiKey  = getenv('OPENAI_API_KEY')  ?: ($_SERVER['OPENAI_API_KEY']  ?? '');
$model   = getenv('OPENAI_MODEL')    ?: ($_SERVER['OPENAI_MODEL']    ?? 'gpt-4o-mini');
$baseUrl = getenv('OPENAI_API_URL')  ?: ($_SERVER['OPENAI_API_URL']  ?? 'https://api.openai.com/v1');
$apiUrl  = rtrim($baseUrl, '/') . '/chat/completions';

$messages = [['role' => 'system', 'content' => $systemPrompt]];
foreach ($history as $chat) {
    if (isset($chat['role'], $chat['content'])) {
        $messages[] = ['role' => $chat['role'], 'content' => $chat['content']];
    }
}
$messages[] = ['role' => 'user', 'content' => $message];

$payload = json_encode([
    'model'       => $model,
    'messages'    => $messages,
    'temperature' => 0.7,
]);

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_TIMEOUT        => 15,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ],
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError || $response === false) {
    http_response_code(500);
    echo json_encode(['reply' => 'Gagal menghubungi server AI. Error: ' . $curlError]);
    exit;
}

if ($httpCode !== 200) {
    http_response_code(500);
    echo json_encode(['reply' => 'API Error ' . $httpCode . ': ' . substr($response, 0, 200)]);
    exit;
}

$data  = json_decode($response, true);
$reply = $data['choices'][0]['message']['content'] ?? 'Tidak ada respon dari chatbot.';

echo json_encode(['reply' => $reply]);
