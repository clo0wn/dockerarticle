<?php
  
class Conexao
{
   private static $connection;
  
   private function __construct(){}
  
   public static function getConnection() {
  
       $pdoConfig  = sqlsrv . ":". "Server=" . 127.0.0.1 . ";";
       $pdoConfig .= "Database=".db.";";
       
       try {
           if(!isset($connection)){
               $connection =  new PDO($pdoConfig, root, 123.456);
               $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           }
           return $connection;
       } catch (PDOException $e) {
           $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
           $mensagem .= "\nErro: " . $e->getMessage();
           throw new Exception($mensagem);
       }
   }
}
