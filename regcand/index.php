<?php 
session_start();
if (!$_SESSION['id']) {
    header("Location: index.php");
    exit; 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Candidatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <h1>Registrar Candidatos</h1>
    <p>User:<?php echo $_SESSION['id'];?></p>
    <form action="" method="post">
        <div class="cartaoform">
        Nome do Candidato:
        <input type="text" name="nome" id="" placeholder="Nome" >
        Partido:
        <input type="text" name="partido" id="" placeholder="Partido">
Número:
        <input type="number" name="numero" id="" placeholder="10-99" min="10"max="99" value="">

        <input type="submit" class="botaoconfirmar" value="Registrar">
        <input type="button" class="botaogenerico" onclick="location.href = '../paineladm.php'" value="Finalizar"></input>
        </div>
    </form>
    
</body>
</html>
<?php
include '../base.php'; 

    $nome = $_POST['nome'] ?? "---";
    $partido = $_POST['partido'] ?? "---";
    $numero = $_POST['numero'] ?? "";
    if(isset($_POST['nome']) && isset($_POST['numero']) && $numero > 9){
    try{
    $resu = mysqli_query($conn,"INSERT INTO tb_candidatos(nome,partido,numero) VALUES('$nome','$partido','$numero')");
    echo "<script>alert('Candidato Registrado com Sucesso!')</script>";
    }
    catch(Exception $e){ 
        $erro = $e->getMessage();
        echo '<div class="erro">Candidato já registrado! <br>'.$erro."</div>";
    }
    #echo '<script>alert("Cadastrado com sucesso!")</script>';
}
else{

}
    mysqli_close($conn); ?>
    </p>
    


