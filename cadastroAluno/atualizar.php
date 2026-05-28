<?php
  include 'conexao.php';
  global $conexao;

    $RA = $_POST['RA'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $curso = $_POST['curso'];

    $sql = "UPDATE alunos SET
                   nome = '$nome', 
                   idade = '$idade', 
                   curso = '$curso' 
            WHERE RA = $RA";

    mysqli_query($conexao, $sql);

    header('Location: index.php');

?>