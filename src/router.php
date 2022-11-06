<?php

class Router {

    public $router = null;
    public $twig = null;

    public function __construct($twig)
    {
        $this->router = new \Bramus\Router\Router();     
	$this->twig = $twig;
    }

    function init()
    {
        $this->router->get('/', function () {
            echo $this->twig->render('index.html', ['name' => time()]);
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