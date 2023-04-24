CREATE DATABASE urna;
use urna;
CREATE TABLE tb_candidatos(
	nome varchar(50),
    partido varchar(50),
    numero numeric(2) PRIMARY KEY
);
CREATE TABLE tb_eleitor(
	nome varchar(50),
    id varchar(5) PRIMARY KEY
);
CREATE TABLE tb_voto(
    voto numeric(2)
);
CREATE TABLE tb_admin(
    id varchar(20) PRIMARY KEY,
    pass varchar(50)
);
DROP TABLE tb_candidatos;
SELECT * FROM tb_candidatos;
SELECT * FROM tb_voto;
DROP TABLE tb_voto;
SELECT * FROM tb_eleitor;
DROP TABLE tb_eleitor;