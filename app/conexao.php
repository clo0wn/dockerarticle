<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '123.456');
define('DB', 'db');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
