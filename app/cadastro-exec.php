<?php

$dbuser = "root";
$dbpass = "123.456";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

#var_dump($_POST);

$pdo = new PDO("mysql:host=mysql;dbname=db", $dbuser, $dbpass);

$stmt = $pdo->prepare('INSERT INTO cadastro (login, senha) VALUES(:Usuario, :Senha)');

$stmt->execute(array(':Usuario' => $usuario, ':Senha' => $senha,));

print "<script>";
print "alert('Cadastro efetuado com sucesso!!');";
print "window.location.href='login.php'";
print "</script>";

?>
