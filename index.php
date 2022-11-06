<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
require __DIR__ .'/src/router.php';
require __DIR__ .'/src/companies.php';

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
