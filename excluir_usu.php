<?php
include_once "conexao.php";
$id_usu=  $_GET["idUsu"];

$query_excluir="DELETE FROM USUARIO WHERE USU_ID = $id_usu";
mysqli_query($con,$query_excluir);
header("location: index.php");



?>