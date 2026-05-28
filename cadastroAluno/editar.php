<?php
include 'conexao.php';
global $conexao;

$RA = $_GET['RA'] ?? null;

if (!$RA) {
    die('RA não fornecido.');
}


$stmt = $conexao->prepare("SELECT nome, idade, curso FROM alunos WHERE RA = ?");
$stmt->bind_param("i", $RA);
$stmt->execute();
$result = $stmt->get_result();
$aluno = $result->fetch_assoc();

if (!$aluno) {
    die('Aluno não encontrado.');
}

$stmt->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form action="atualizar.php" method="post">
        <input type="hidden" name="RA" value="<?php echo htmlspecialchars($RA); ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($aluno['nome']); ?>" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" value="<?php echo htmlspecialchars($aluno['idade']); ?>" required><br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" value="<?php echo htmlspecialchars($aluno['curso']); ?>" required><br><br>

        <input type="submit" value="Atualizar">
    </form>
    
</body>
</html>