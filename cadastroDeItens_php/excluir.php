<?php
include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados
global $conexao; // Torna a variável de conexão global para uso neste arquivo

$id = $_GET['id']; // Obtém o ID do item a ser excluído

$sql = "DELETE FROM roupas WHERE id = $id"; // Cria a consulta SQL para excluir o item com base no ID
mysqli_query($conexao, $sql); // Executa a consulta SQL para excluir o item do banco de dados

header('Location: index.php'); // Redireciona o usuário de volta para a página principal após a exclusão

?>