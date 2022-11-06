<?php

class Companies {

public function getCompanies() {

$dsn = 'mysql:host=your_db_host;dbname=your_db_name;charset=utf8';
$usr = 'your_db_username';
$pwd = 'your_db_password';

$database = new FaaPz\PDO\Database($dsn, $usr, $pwd);

// SELECT * FROM users WHERE id = ?
$select = $database->select()
                   ->from('users')
                   ->where(new FaaPz\PDO\Clause\Conditional('id', '=', 1234));

if ($insert->execute()) {
    $data = $stmt->fetch();
}

}
 
}