<?php
  include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados
  global $conexao; // Torna a variável de conexão global para uso neste arquivo
  
    $id = $_POST['id']; // Obtém o ID do item a ser atualizado
    $nome = $_POST['nome']; // Obtém o nome do item
    $tamanho = $_POST['tamanho']; // Obtém o tamanho do item
    $cor = $_POST['cor']; // Obtém a cor do item
    $preco = $_POST['preco']; // Obtém o preço do item
    $categoria = $_POST['categoria']; // Obtém a categoria do item

    $sql = "UPDATE roupas SET
                   nome = '$nome', 
                   tamanho = '$tamanho', 
                   cor = '$cor', 
                   preco = '$preco', 
                   categoria = '$categoria'
            WHERE id = $id"; // Cria a consulta SQL para atualizar o item com base no ID

    mysqli_query($conexao, $sql); // Executa a consulta SQL para atualizar o item no banco de dados

    header('Location: index.php'); // Redireciona o usuário de volta para a página principal após a atualização

?>