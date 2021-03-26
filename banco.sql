CREATE DATABASE escola;

USE escola;

CREATE TABLE professor(
	id_professor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NULL,
    email VARCHAR(45) NULL,
    CPF INT NULL,
    endereco VARCHAR(45) NULL,
    numero INT NULL,
    complemento VARCHAR(45) NULL,
    cidade VARCHAR(45) NULL,
    estado VARCHAR(45) NULL
);

CREATE TABLE aluno(
	id_aluno INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NULL,
    email VARCHAR(45) NULL,
    CPF INT NULL,
    endereco VARCHAR(45) NULL,
    numero INT NULL,
    cidade VARCHAR(45) NULL,
    estado VARCHAR(45) NULL
);

DROP DATABASE escola;

SELECT * FROM aluno;
SELECT * FROM professor;

DROP TABLE aluno;