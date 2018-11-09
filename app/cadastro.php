<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '123.456');
define('DB', 'db');
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect(HOST, USUARIO, SENHA, DB);
$db = mysql_select_db(DB);
$query_select = "SELECT login FROM cadastro WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO cadastro (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>
