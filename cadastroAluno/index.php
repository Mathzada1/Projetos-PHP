<?php
include 'conexao.php';
global $conexao;
$sql = "SELECT * FROM alunos ORDER BY RA DESC";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h1>Cadastro de Alunos</h1>
        
        <form action="salvar.php" method="POST">
            <input type="text" name="nome" placeholder="Nome do Aluno" required>
            <input type="number" step="1" name="idade" placeholder="Idade" required>
            <input type="text" name="curso" placeholder="Curso" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    
    <table>
        <tr>
            <th>RA</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Curso</th>
        </tr>
        <?php while($dados = mysqli_fetch_assoc($resultado)) { ?>

        <tr>
            <td><?php echo $dados['RA']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['idade']; ?></td>
            <td><?php echo $dados['curso']; ?></td>
            <td>
                <a class="editar"   href="editar.php?RA=<?php echo $dados['RA']; ?>">Editar</a>
                <a class="excluir" href="excluir.php?RA=<?php echo $dados['RA']; ?>"
                onclick="return confirm('Deseja excluir?')">
                Excluir
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>