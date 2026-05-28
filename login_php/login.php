<?php
session_start(); // Inicia a sessão para armazenar informações do usuário

include("conexao.php"); // Inclui o arquivo de conexão com o banco de dados

$usuario = trim($_POST['usuario']); // Pega o nome de usuário enviado pelo formulário e remove espaços em branco
$senha = ($_POST['senha']); // Pega a senha enviada pelo formulário

$stmt = $conexao->prepare('SELECT id, usuario, senha FROM tbusuarios WHERE usuario = ?'); // Prepara uma consulta SQL para selecionar o id, nome de usuário e senha da tabela "tbusuarios" onde o nome de usuário é igual ao valor enviado pelo formulário

$stmt->bind_param('s', $usuario); // Liga o parâmetro "s" (string) ao valor da variável $usuario, que será usado na consulta SQL
$stmt->execute(); // Executa a consulta SQL preparada

$resultado = $stmt->get_result(); // Obtém o resultado da consulta SQL e armazena na variável $resultado

if($resultado->num_rows === 1){ // Verifica se o número de linhas retornada pela consulta SQL é igual a 1
    $dados = $resultado->fetch_assoc(); // Se houver exatamente um resultado, pega os dados do resultado e armazena na variável $dados
    if(password_verify($senha, $dados['senha'])){ // Verifica se a senha enviada pelo formulário corresponde à senha armazenada no banco de dados usando a função password_verify
        $_SESSION['usuario'] = $dados['usuario']; // Se a senha for válida, armazena o nome de usuário na variável de sessão "usuario"
        header('Location: painel.php'); // Redireciona o usuário para a página "painel.php"
    }
}

echo 'Usuário ou senha inválidos.'; // Se a consulta SQL não retornar exatamente um resultado ou se a senha for inválida, exibe uma mensagem de erro indicando que o nome de usuário ou senha são inválidos

?>