<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
require __DIR__ .'/src/companies.php';

final class App
{

    public $router = null;
    public $loader = null;
    public $twig = null;

    public function __construct()
    {

        $this->router = new \Bramus\Router\Router();
        $this->loader = new \Twig\Loader\FilesystemLoader('views');
        $this->twig = new \Twig\Environment($this->loader/*, ['cache' => 'views/cache',]*/);        
    }

    function start()
    {
        $this->router->get('/', function () {
            echo $this->twig->render('index.html', ['the' => 'variables', 'go' => 'here']);
        });

        $this->router->get('/login', function () {
            echo $this->twig->render('login.html');
        });

        $this->router->get('/register', function () {
            echo $this->twig->render('register.html');
        });

        $this->router->run();
    }
}

$app = new App();
$app->start();
