<?php
include_once '../helpers.php';

$routes = [
  '/' => 'controllers/index.php',
  '404' => 'errors/404.php',
  '/listings' => 'controllers/listings/index.php',
  '/listings/create' => 'controllers/listings/create.php'
];

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)){
  require basePath($routes[$uri]);
} else {
  require basePath($routes['404']);
}

