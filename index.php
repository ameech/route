<?php

function r($path, $closure = null) {
    static $rts = [];

    if ($closure) return $rts[$path] = $closure;

    $rt = getenv('REQUEST_METHOD').' '.$path;

    if (isset($rts[$rt]))
        $rts[$rt]();
}

r('GET /route/', function() {
    echo 'home page!';
});

// Call up the routes
r(getenv('REQUEST_URI'));