<?php

require_once "conexao.php";

$queryUsu = "select *from usuario";
$executar = mysqli_query($con,$queryUsu);

while($result = mysqli_fetch_array($executar)){
    $id = $result["usu_id"];
    $usu = $result["usu_login"];
    $senha = $result["usu_senha"];
    echo "<tr>
    
        <td>$id</td>
        <td>$usu</td>
        <td>$senha</td>
        <td><a href='excluir_usu.php?idUsu=$id'>Excluir</a></td>
    
    
    </tr>";

}

?>