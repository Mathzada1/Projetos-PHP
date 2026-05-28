<?php
    $host = "localhost"; // Define o host do banco de dados
    $usuario = "root"; // Define o nome de usuário do banco de dados
    $senha = ""; // Define a senha do banco de dados
    $banco = "sistema_login"; // Define o nome do banco de dados
 
    $conexao = new mysqli($host, $usuario, $senha, $banco); // Cria uma nova conexão com o banco de dados usando as informações acima
 
    if ($conexao->connect_error){ // Verifica se houve um erro na conexão
        die("Erro de conexão" . $conexao->connect_error); // Se houver um erro, exibe a mensagem de erro e termina o script
    }
    else{ // Se a conexão for bem sucedida exibe uma mensagem de sucesso
        echo "Conexão sucedida";
    }
 
?>