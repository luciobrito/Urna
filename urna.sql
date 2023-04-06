CREATE DATABASE urna;
use urna;
CREATE TABLE tb_candidatos(
	nome varchar(50),
    partido varchar(50),
    numero numeric(4) PRIMARY KEY
);
CREATE TABLE tb_eleitor(
	nome varchar(50),
    id varchar(5)
);
CREATE TABLE tb_voto(
    voto numeric(2)
);
DROP TABLE tb_candidatos;
SELECT * FROM tb_voto;