<?php

// Require composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

final class App
{

    public $router = null;
    public $loader = null;
    public $twig = null;

    public function __construct()
    {

        $this->router = new \Bramus\Router\Router();
        $this->loader = new \Twig\Loader\FilesystemLoader('views');
        $this->twig = new \Twig\Environment($this->loader, ['cache' => 'views/cache',]);
    }

    function start()
    {
        $this->router->get('/', function () {
            echo $this->twig->render('index1.html', ['the' => 'variables', 'go' => 'here']);
        });

        $this->router->get('/hello', function () {
            echo $this->twig->render('index2.html', ['the' => 'variables', 'go' => 'here']);
        });

        $this->router->run();
    }
}

$app = new App();
$app->start();
