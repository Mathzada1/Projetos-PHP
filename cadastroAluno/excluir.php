<?php
include 'conexao.php';
global $conexao;

$RA = $_GET['RA'];

$sql = "DELETE FROM alunos WHERE RA = $RA";
mysqli_query($conexao, $sql);

header('Location: index.php');

?>