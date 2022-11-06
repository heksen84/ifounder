<?php

require_once __DIR__ .'/companies.php';

class Router {

    public $router;
    public $twig;
    public $companies;

    public function __construct($twig)
    {
        $this->router = new \Bramus\Router\Router();     
	$this->twig = $twig;
	$this->companies = new Companies();
    }

    function init()
    {
        $this->router->get('/', function () {
            echo $this->twig->render('index.html', ['name' => time(), 'companies' => []/*$this->companies->getCompanies()*/ ]);
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