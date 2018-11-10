<?php
session_start();
include('conexao.php');

$usuario = strtoupper($_POST['usuario']);
$senha = strtoupper($_POST['senha']);

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$stmt = $pdo->prepare('INSERT INTO cadastro (login, senha) VALUES(:Usuario, :Senha)');
$stmt->execute(array(':Usuario' => $usuario, ':Senha' => $senha,));
HEADER('LOCATION: login.html');
?>
