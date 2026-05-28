<?php
include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados
global $conexao; // Torna a variável de conexão global para uso neste arquivo
$id = $_GET['id']; // Obtém o ID do item a ser editado

$sql = "SELECT * FROM roupas WHERE id = $id"; // Cria a consulta SQL para selecionar o item com base no ID
$resultado = mysqli_query($conexao, $sql); // Executa a consulta SQL e armazena o resultado em uma variável

$dados = mysqli_fetch_assoc($resultado); // Converte o resultado da consulta em um array associativo para facilitar o acesso aos dados do item
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Roupas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Roupas</h1>

        <form action="salvar.php" method="POST"> 
            <input type="text" name="nome" placeholder="Nome da roupa" required>
            <input type="text" name="tamanho" placeholder="Tamanho" required>
            <input type="text" name="cor" placeholder="Cor" required>
            <input type="number" step="0.01" name="preco" placeholder="Preço" required>
            <input type="text" name="categoria" placeholder="Categoria" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>