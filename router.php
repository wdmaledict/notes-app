<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/notes' => 'controllers/notes.php',
  '/note' => 'controllers/note.php',
  '/contact' => 'controllers/contact.php',
  '/services' => 'controllers/services.php',

];

function matchRoute($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    return $routes[$uri];
  }

  abort();
}

function abort($code = 404)
{
  http_response_code($code);

  require "views/{$code}.php";

  die();
}

$controller = matchRoute($uri, $routes);

require $controller;
