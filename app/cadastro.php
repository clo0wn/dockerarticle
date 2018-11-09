<?php 
define('DB_HOST'        , "127.0.0.1");
define('DB_USER'        , "root");
define('DB_PASSWORD'    , "123.456");
define('DB_NAME'        , "db");
define('DB_DRIVER'      , "sqlsrv");
  
require_once "Conexao.php";
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
        $Conexao    = Conexao::getConnection();
        $query = "INSERT INTO cadastro (login,senha) VALUES ('$login','$senha')";
         
        if($Conexao){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>
