<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Digite os dados do eleitor</h1>

</body>
</html>

    <form action="" method="post">
        <input type="text" name="id" id="ID do eleitor" placeholder="ID do eleitor">
        <input type="submit" value="Confirmar">
        
    </form>

<?php
include '../base.php';


$id = $_POST['id'] ?? "";

$resu = mysqli_query($conn, "SELECT id from tb_eleitor where '$id'");
while($row=mysqli_fetch_array($resu)){
    header('Location: '.$url);
}
if(!$row=mysqli_fetch_array($resu)){
    echo "Eleitor não identificado";
}