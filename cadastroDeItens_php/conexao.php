<?php

$servidor = "localhost"; // Endereço do servidor de banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados (Em branco porque não tem senha)
$banco = "loja_roupas"; // Nome do banco de dados

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco); // Estabelece a conexão com o banco de dados usando as informações acima

if (!$conexao) {
    die("Erro na conexao: ". mysqli_connect_error());
} // Verifica se a conexão foi bem-sucedida, caso contrário, exibe uma mensagem de erro e encerra o script

?>