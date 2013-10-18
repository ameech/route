<?php

function router($path, $closure = null) {
    static $routes = [];

    if ($closure) return $routes[$path] = $closure;

    $route = getenv('REQUEST_METHOD').' '.$path;

    if (isset($routes[$route]))
        $routes[$route]();
}

router('GET /route/', function() {
    echo 'home page!';
});

// Call up the routes
router(getenv('REQUEST_URI'));