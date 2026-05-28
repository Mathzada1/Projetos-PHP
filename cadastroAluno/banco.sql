CREATE DATABASE cadastro_aluno;
USE cadastro_aluno;

CREATE TABLE alunos (
    RA INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    curso VARCHAR(50) NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)