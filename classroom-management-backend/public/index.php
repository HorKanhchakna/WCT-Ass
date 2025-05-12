<?php

require_once __DIR__ . '/../src/routes/web.php'; 

// Initialize the application and handle requests
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Route handling
if ($uri === '/students' && $requestMethod === 'GET') {
    getAllStudents();
} elseif ($uri === '/students' && $requestMethod === 'POST') {
    createStudent();
} elseif (preg_match('/\/students\/(\d+)/', $uri, $matches) && $requestMethod === 'DELETE') {
    deleteStudent($matches[1]);
} elseif (preg_match('/\/students\/(\d+)/', $uri, $matches) && $requestMethod === 'PATCH') {
    updateStudent($matches[1]);
} else {
    http_response_code(404);
    echo json_encode(['message' => 'Not Found']);
}