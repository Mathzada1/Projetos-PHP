<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_painel.css">
    <title>Painel Principal</title>
</head>
<body>
    
    <div class="container">
        <h2>Bem Vindo!</h2> 
        <p><?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
