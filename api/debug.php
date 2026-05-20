<?php
// Debug endpoint - REMOVE AFTER DEBUGGING
header('Content-Type: application/json');
echo json_encode([
    'REQUEST_URI'    => $_SERVER['REQUEST_URI']    ?? 'NOT SET',
    'REQUEST_METHOD' => $_SERVER['REQUEST_METHOD'] ?? 'NOT SET',
    'PATH_INFO'      => $_SERVER['PATH_INFO']      ?? 'NOT SET',
    'SCRIPT_NAME'    => $_SERVER['SCRIPT_NAME']    ?? 'NOT SET',
    'HTTP_HOST'      => $_SERVER['HTTP_HOST']      ?? 'NOT SET',
    'QUERY_STRING'   => $_SERVER['QUERY_STRING']   ?? 'NOT SET',
], JSON_PRETTY_PRINT);
