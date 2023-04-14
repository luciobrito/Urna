<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>
    <script>alert("Voto Registado.");
window.location.href = "validacao.php";</script>
</body>
</html>
<?php

$numc = $_POST['num_cand'] ?? "";
include '../base.php';
$resu = mysqli_query($conn,"INSERT INTO tb_voto(voto) VALUES('$numc')");
if($resu){
    echo "<script>alert('Voto Registrado.')</script>";
    }
