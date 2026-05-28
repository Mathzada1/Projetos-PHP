<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro_aluno";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexao: ". mysqli_connect_error());
}

?>