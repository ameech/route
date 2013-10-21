<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

function router($method, $path, $routes) {
    isset($routes[$method][$path]) && $routes[$method][$path]();
}

// Call up the routes
router(getenv('REQUEST_METHOD'), getenv('REQUEST_URI'), [
    'GET' => [
        '/route/' => function() {
            echo 'home page!';
        },
        '/route/index.php/test' => function() {
            echo 'Test Page!';
        }
    ]
]);