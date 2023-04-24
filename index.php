<?php
session_start();
?>
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
    <h1 class="logo">E-Voto</h1>
    <p class="subtitulo">Digite a senha de Administrador</p>
    
    <form method="post">
        <div class="cartaoform">
        <label for="id">ID Administrador: </label>

        <input type="text" name="id" id="" placeholder="ID">
        <label for="pass">Senha do Administrador: </label>
        <input type="password" name="pass" id="" placeholder="Senha">
        <input type="submit" class="botaoconfirmar" value="Entrar">
        </div>
        
    </form>
</body>

</html>
<?php
include 'base.php';
$id = $_POST['id'] ?? "";
$pass = $_POST['pass'] ?? ""; 
$_SESSION['id'] = $id;
$_SESSION['pass'] = $pass;
$resu = mysqli_query($conn, "SELECT id,pass FROM tb_admin WHERE pass = '$pass' and id = '$id'");
$num_rows = mysqli_num_rows($resu);
if ($num_rows > 0 && isset($_POST['id'])) {
    header("Location: paineladm.php");
  }
else if(!$num_rows > 0 && isset($_POST['id'])){
    echo "<div class='erro'>Senha ou Usuario errados!</div>";
}
?>