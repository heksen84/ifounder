<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/router.php';

const DSN = 'mysql:host=localhost;dbname=carlar;charset=utf8';
const USR = 'root';
const PWD = '';

$router = new Router(
 new \Twig\Environment(new \Twig\Loader\FilesystemLoader('views')),
 new FaaPz\PDO\Database(DSN, USR, PWD)
);
	
$router->init();
