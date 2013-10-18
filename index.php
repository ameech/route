<?php

function r($path, $method, $closure) {
    if (getenv('REQUEST_METHOD') === $method && getenv('REQUEST_URI') === $path) {
        call_user_func($closure, $path);
    }
}

r('/route/', 'GET', function($path) {
    echo 'home page!';
});