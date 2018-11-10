<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '123.456');
define('DB', 'db');

$pdo = new PDO("mysql:host=mysql;dbname=db", 'root', '123.456');
function db_connect()
{
    $pdo = new PDO("mysql:host=mysql;dbname=db", 'root', '123.456');
    return $PDO;
}

function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
 
    return true;
}
?>
