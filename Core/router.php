<?php


function matchRoute($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    return base_path($routes[$uri]);
  }

  abort();
}

function abort($code = 404)
{
  http_response_code($code);

  require base_path("views/{$code}.php");

  die();
}

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$controller = matchRoute($uri, $routes);

require $controller;
