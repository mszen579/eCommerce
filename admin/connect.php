<?php
//connecting via PDO
$dsn = 'mysql:host=localhost;dbname=shop';
$user= 'root';
$pass= '';
$option = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);

try {
  $con = new PDO ($dsn, $user, $pass, $option);
  $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}

catch(PDOException $e){
  echo '<h1 style="color:red">' . "failed to connect to DB" . '</h1>' . $e->getMessage();
}