<?php
    include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados
    global $conexao; // Torna a variável de conexão global para uso neste arquivo

    $nome = $_POST['nome']; // Obtém o nome do item a partir dos dados enviados pelo formulário
    $tamanho = $_POST['tamanho']; // Obtém o tamanho do item a partir dos dados enviados pelo formulário
    $cor = $_POST['cor']; // Obtém a cor do item a partir dos dados enviados pelo formulário
    $preco = $_POST['preco']; // Obtém o preço do item a partir dos dados enviados pelo formulário
    $categoria = $_POST['categoria']; // Obtém a categoria do item a partir dos dados enviados pelo formulário

    $sql = "INSERT INTO roupas(nome, tamanho, cor, preco, categoria)
            VALUES('$nome', '$tamanho', '$cor', '$preco', '$categoria' )"; // Cria a consulta SQL para inserir um novo item na tabela "roupas" com os valores obtidos do formulário

    mysqli_query($conexao, $sql); // Executa a consulta SQL para inserir o novo item no banco de dados

    header('Location: index.php'); // Redireciona o usuário de volta para a página principal após a inserção do item
    ?>
