<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/', function() { echo 'Index1'; });
$router->get('/hello', function() { echo 'Hello!'; });


// Run it!
$router->run();