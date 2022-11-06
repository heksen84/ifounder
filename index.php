<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/router.php';

final class App
{
    const DSN = 'mysql:host=localhost;dbname=carlar;charset=utf8';
    const USR = 'root';
    const PWD = '';

    public $router = null;
     
    public function __construct()
    {

        $this->router = new Router(
	new \Twig\Environment(new \Twig\Loader\FilesystemLoader('views')),
	new FaaPz\PDO\Database(self::DSN, self::USR, self::PWD)
	);
	
	$this->router->init();
    }

}

$app = new App();