<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Candidatos</h1>
    <form action="" method="post">
        <input type="text" name="nome" id="" placeholder="Nome do Candidato">
        <input type="text" name="partido" id="" placeholder="Partido">
        <input type="text" name="numero" id="" placeholder="numero">
        <input type="submit" value="Registrar">
    </form>
    <a href="../regeleitor/index.php"><button>Finalizar</button></a>
</body>
</html>
<?php
include '../base.php'; 
    $nome = null;
    $numero = null;
    $partido = null;
    if(isset($_POST['nome'])&&isset($_POST['partido'])&&isset($_POST['numero'])){
    $nome = $_POST['nome'];
    $partido = $_POST['partido'];
    $numero = $_POST['numero'];
    }
    else{
        $nome = null;
        $numero = null;
        $partido = null;
    }
    $resu = mysqli_query($conn,"INSERT INTO tb_candidatos(nome,partido,numero) VALUES('$nome','$partido','$numero')");
    echo '<script>alert("Cadastrado com sucesso!")</script>';
    mysqli_close($conn);
    


