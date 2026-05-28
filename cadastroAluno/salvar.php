<?php
    include 'conexao.php';
    global $conexao;

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $curso = $_POST['curso'];

    $sql = "INSERT INTO alunos(nome, idade, curso) 
            VALUES('$nome', '$idade', '$curso')";

    mysqli_query($conexao, $sql);

    header('Location: index.php');
?>
