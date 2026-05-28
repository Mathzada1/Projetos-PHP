<?php
include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados
global $conexao; // Torna a variável de conexão global para uso neste arquivo
$sql = "SELECT * FROM roupas ORDER BY id DESC"; // Cria a consulta SQL para selecionar todos os itens da tabela "roupas" e mostra em ordem decrescente com base no ID
$resultado = mysqli_query($conexao, $sql);  // Executa a consulta SQL e armazena o resultado em uma variável para uso posterior na exibição dos dados
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

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tamanho</th>
            <th>Cor</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
        <?php while($dados = mysqli_fetch_assoc($resultado)) { ?>

        <tr>
            <td><?php echo $dados['id']; ?></td> <!-- Exibe o ID do item -->
            <td><?php echo $dados['nome']; ?></td> <!-- Exibe o nome do item -->
            <td><?php echo $dados['tamanho']; ?></td> <!-- Exibe o tamanho do item -->
            <td><?php echo $dados['cor']; ?></td> <!-- Exibe a cor do item -->
            <?php echo number_format($dados['preco'], 2, ',' , '.'); ?></td> <!-- Exibe o preço do item formatado como moeda brasileira -->
            <td>R$ <?php echo $dados['preco']; ?></td> <!-- Exibe o preço do item com o símbolo de real (R$) -->
            <td><?php echo $dados['categoria']; ?></td> <!-- Exibe a categoria do item -->
            <td>
                <a class="editar"   href="editar.php?id=<?php echo $dados['id']; ?>">Editar</a>
                <a class="excluir" href="excluir.php?id=<?php echo $dados['id']; ?>"
                onclick="return confirm('Deseja excluir?')">
                Excluir
                </a>
            </td>
        </tr>
        <?php } ?> <!-- Fecha o loop while que percorre os resultados da consulta SQL e exibe cada item em uma linha da tabela -->
    </table>


</body>
</html>