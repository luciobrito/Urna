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
    <title>Painel do Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Painel do Administrador.</h1>
    <p>Bem-vindo(a), <?php echo $_SESSION['id']?> ao painel do Administrador</p>
    <a href="regcand/index.php"><button class="botaoverde">Registrar Candidatos</button></a>
    <a href="regeleitor/index.php"><button class="botaoverde">Registrar Eleitores</button></a>
    <a href="votacao/validacao.php"><button class="botaoverde">Iniciar a Votação</button></a>
</body>
</html>