<?php
session_start();
include('conexao.php');
 
$usuario = strtoupper($_POST['usuario']);
$senha = strtoupper($_POST['senha']);

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: login.html');
	exit();
}

$sql = "SELECT login FROM cadastro WHERE login = :usuario AND senha = :senha";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senha);
 
$stmt->execute();

$numero_registro = $stmt->rowCount();
if($numero_registro!=0)
{
	$_SESSION['usuario'] = $usuario;
    header("Location:painel.php");
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
    header("Location:login.html");
	exit();
}
{
die("Error:" . $e->getMessage());
}
?>

