<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna Eletrônica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Urna Eletrônica</h1>
    <p>Para inciar registre os Candidatos que participarão</p>
    <a href="regcand/index.php"><button>Registro de Candidatos</button></a>
    <p><a href="arquivo.txt" download>Baixar</a></p>
</body>

</html>
<?php
include 'base.php';
mysqli_query($conn, "CREATE TABLE tb_candidatos(
	nome varchar(50),
    partido varchar(50),
    numero numeric(2) PRIMARY KEY
)");
mysqli_query($conn, "CREATE TABLE tb_eleitor(
	nome varchar(50),
    id numeric(5) PRIMARY KEY
)");
mysqli_query($conn, "CREATE TABLE tb_voto(
    voto numeric(2)
)");

