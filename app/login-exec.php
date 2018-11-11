<?php

$dbuser = "root";
$dbpass = "123.456";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

#var_dump($_POST);

$pdo = new PDO("mysql:host=mysql;dbname=db", $dbuser, $dbpass);

$statement = $pdo->prepare("SELECT * FROM cadastro WHERE login = :usuario AND senha = :senha");
$statement->bindParam(':usuario', $usuario);
$statement->bindParam(':senha', $senha);
$statement->execute();
$numero_registro = $statement->rowCount();

if($numero_registro != 0)
{
	SESSION_START();
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
    header("Location:painel.php");
	exit();
} else {
	print "<script>";
	print "alert('Login ou senha incorreto!!');";
	print "window.location.href='login.php'";
	print "</script>";
	exit();
}
{
die("Error:" . $e->getMessage());
}
?>

