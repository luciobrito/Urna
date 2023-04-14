<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Registrar Eleitores</h1>
    <form action="" method="post">
        <input type="text" name="nome" id="" placeholder="Nome do Eleitor">
        <input type="text" name="id" id="" placeholder="ID do eleitor">
        <br>
        <input type="submit" value="Cadastrar">
</form>
    <a href="../votacao/validacao.php"><button>Iniciar votação</button></a>
</body>
</html>
<?php
    include '../base.php';

    $mensagem = "";

    $nome = $_POST['nome']?? "";
    $id = $_POST['id']?? "";
    try{
    $resu = mysqli_query($conn,"INSERT INTO tb_eleitor(nome,id) VALUES('$nome','$id')");
    }
    catch(Exception $e){ ?><p style="color:red"> <?php 
        echo "Número já registrado <br> Erro: ",$e->getMessage();
    }
    
    mysqli_close($conn); ?>
    </p>