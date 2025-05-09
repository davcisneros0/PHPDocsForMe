<?php
$routes = require("routes.php");

// "ROUTER", otherwise error and use abort function
function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// default is error code 404
function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


routeToController($uri, $routes);
