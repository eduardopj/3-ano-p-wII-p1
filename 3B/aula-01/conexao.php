<?php
$servidor = "localhost";
$banco = "ifac";
$usuario = "root";
$senha = ""
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if(!$conexao){
    die("erro ao conectar".mysqli_connect_error());
}else{
}
?>