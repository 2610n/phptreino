<?php
require_once "conexao.php";

if(isset($_POST["btn"])){

$usuario = mysqli_escape_string($con,isset($_POST["login"])?$_POST["login"]: "sem usuario");
$senha = mysqli_escape_string($con,isset($_POST["senha"])?$_POST["senha"]: "sem senha");
if($senha == "" && $usuario == ""){
   echo "<script>alert('usuario ou senha incorretos');</script>";
}else{

     $p_usu="select usu_login , usu_senha from usuario where usu_login = '$usuario' and usu_senha = '$senha'";
     $executar=mysqli_query($con,$p_usu);
       if(mysqli_num_rows($executar) > 0){
            header("location:home.php");
       }else{
        header("location:index.php");
       }

}

}

?>