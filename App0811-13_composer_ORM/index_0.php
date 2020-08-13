<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        // require __DIR__ . 'src/views/index.php';
        break;
    case '' :
        // require __DIR__ . 'src/views/index.php';
        break;
    case '/about' :
        require __DIR__ . 'src/views/about.php';
        break;
    default:
        http_response_code(404);
        // require __DIR__ . 'src/views/404.php';
        break;
}