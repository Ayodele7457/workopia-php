<?php

// $routes = [
//     '/' => 'controllers/index.php',
//     '404' => 'errors/404.php',
//     '/listings' => 'controllers/listings/index.php',
//     '/listings/create' => 'controllers/listings/create.php'
//   ];


$router->get('/', 'controllers/index.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');