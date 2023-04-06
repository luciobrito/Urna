<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Votação</h1>
    <form action="votacao.php" method="post">
        <input type="text" name="num_cand" id="" placeholder="numero do candidato">
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>
<?php
$numc = $_POST['num_cand'];
include '../base.php';
$resu = mysqli_query($conn,"INSERT INTO tb_voto(voto) VALUES('$numc')");
