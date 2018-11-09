<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$stmt = $pdo->prepare('INSERT INTO cadastro (usuario, senha) VALUES(:usuario, :senha)');
$stmt->execute(array(':usuario' => $usuario, ':senha' => $senha,));
HEADER('LOCATION: login.php');
:>
