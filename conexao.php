<?php

$host = "127.0.0.1";
$root = "root";
$pass = "169811";
$db = "login";

$con = mysqli_connect($host,$root,$pass,$db);

if(mysqli_connect_error()){
  echo "erro na conexão";
}

?>