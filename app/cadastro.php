<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$pdo = new PDO("mysql:host=mysql;dbname=db", 'root', '123.456');
$stmt = $pdo->prepare('INSERT INTO cadastro (usuario, senha) VALUES(:usuario, :senha)');
$stmt->execute(array(':usuario' => $usuario, ':senha' => $senha,));
HEADER('LOCATION: login.html');
?>
