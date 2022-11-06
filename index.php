<?php

// Require composer autoloader
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ .'/src/router.php';

final class App
{

    public $router = null;

    public function __construct()
    {
        $this->router = new Router(new \Twig\Environment(new \Twig\Loader\FilesystemLoader('views')/*, ['cache' => 'views/cache',]*/));
    }

    function start()
    {
        $this->router->init();
    }
}

$app = new App();
$app->start();
