<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Eleitores</h1>
    <form action="" method="post">
        <input type="text" name="nome" id="" placeholder="Nome do Eleitor">
        <input type="text" name="id" id="" placeholder="ID do eleitor">
        <input type="submit" value="Cadastrar">
</form>
    <a href="../votacao/validacao.php"><button>Iniciar votação</button></a>
</body>
</html>
<?php
    include '../base.php';
    $nome = null;
    $id = null;
    $mensagem = "";
    if(isset($_POST['nome']) == true && isset($_POST['id']) == true){
    $nome = $_POST['nome'];
    $id = $_POST['id'];}
    if(empty($_POST['nome'] )&& empty($_POST['id'])){
    $nome = null;
    $id = null;
    }
    $resu = mysqli_query($conn,"INSERT INTO tb_eleitor(nome,id) VALUES('$nome','$id')");
    if(!empty($_POST['nome'] )&& !empty($_POST['id'])){
        $mensagem = " Cadastrado com sucesso!";
    }
    else{
        #$mensagem = '<script>alert("Cadastrado com sucesso!")</script>';
        $mensagem = "";
    }
    echo $mensagem;
    mysqli_close($conn);