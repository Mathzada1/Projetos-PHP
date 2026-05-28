<?php
include("conexao.php"); // Inclui o arquivo de conexão com o banco de dados

$usuario = "admin"; // Define o nome de usuário
$senha = "1234"; // Define a senha

$hash = password_hash($senha, PASSWORD_DEFAULT); // Cria um hash da senha

$stmt = $conexao->prepare("INSERT INTO tbusuarios(usuario,senha) VALUES (?, ?)"); // Prepara a consulta SQL para inserir o usuário e a senha no banco de dados

$stmt->bind_param("ss", $usuario, $hash); // Vincula os parâmetros à consulta SQL, onde "ss" indica que ambos os parâmetros são strings

if ($stmt->execute()){ // Executa a consulta SQL e verifica se foi bem-sucedida
    echo "Usuário cadastrado";
}
else{
    echo "Erro no cadastro";
}

?>