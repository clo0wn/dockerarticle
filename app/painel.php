<?php
include('verifica_login.php');
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Painel</title>
<meta charset="utf8">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="div1">
<h2 id="titulo">BEM-VINDO, <?php echo $_SESSION['usuario'];?>!</h2>
<h2 id="sair"><a href="logout.php">Sair</a></h2>
</div>
</body>
</html>