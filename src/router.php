<?php

require_once __DIR__ .'/users.php';
require_once __DIR__ .'/companies.php';

class Router {
 
    public $router;
    public $twig;
    public $users;
    public $companies;

    public function __construct($twig, $db)
    {
        $this->router = new \Bramus\Router\Router();     
	$this->twig = $twig;
	$this->users = new Users($db);
	$this->companies = new Companies($db);
    }
    
    public function init() 
    {
        $this->router->get('/', function () {
            echo $this->twig->render('index.html', ['name' => time(), 'companies' => $this->companies->get() ]);
        });

        $this->router->get('/login', function () {
            echo $this->twig->render('login.html');
        });

        $this->router->get('/register', function () {
            echo $this->twig->render('register.html');
        });

	$this->router->get('/home', function () {
            echo $this->twig->render('home.html');
        });

        $this->router->run();
    }

}