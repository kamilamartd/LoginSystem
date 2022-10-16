drop DATABASE if exists bd_blizzard;

CREATE DATABASE bd_blizzard;
USE bd_blizzard;

CREATE TABLE tb_user(
    nome VARCHAR(30),
    nomeEmpresa VARCHAR(30),
    email VARCHAR(20) PRIMARY KEY,
    tel VARCHAR(14),
    cnpj VARCHAR(16),
    social VARCHAR(50),
    senha VARCHAR(50)
);

INSERT INTO tb_user (nome, email, senha) values ('admin', 'admin@gmail.com','admin');

ALTER TABLE tb_user ADD CONSTRAINT tb_user UNIQUE (email);