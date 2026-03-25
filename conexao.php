<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "produ";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("Erro de conexão: ".mysqli_connect_error());
}
?>