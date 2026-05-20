<?php
header('Content-Type: application/json');

$apiKey = getenv('OPENAI_API_KEY') ?: ($_SERVER['OPENAI_API_KEY'] ?? '');

echo json_encode([
    'php_version'      => PHP_VERSION,
    'curl_available'   => function_exists('curl_init'),
    'openssl_available'=> function_exists('openssl_encrypt'),
    'OPENAI_API_KEY'   => !empty($apiKey) ? 'SET (' . strlen($apiKey) . ' chars)' : 'NOT SET',
    'OPENAI_MODEL'     => getenv('OPENAI_MODEL') ?: 'NOT SET',
    'REQUEST_URI'      => $_SERVER['REQUEST_URI'] ?? 'NOT SET',
    'REQUEST_METHOD'   => $_SERVER['REQUEST_METHOD'] ?? 'NOT SET',
], JSON_PRETTY_PRINT);
