<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
require __DIR__ .'/src/router.php';
require __DIR__ .'/src/companies.php';

final class App
{

    public $router = null;
    public $loader = null;
    public $twig = null;

    public function __construct()
    {

        $this->loader = new \Twig\Loader\FilesystemLoader('views');
        $this->twig = new \Twig\Environment($this->loader/*, ['cache' => 'views/cache',]*/);
        $this->router = new Router($this->twig);
    }

    function start()
    {
        $this->router->init();
    }
}

$app = new App();
$app->start();
