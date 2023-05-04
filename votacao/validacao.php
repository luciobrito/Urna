<?php 
session_start();
if (!$_SESSION['id']) {
    header("Location: ../index.php");
    exit; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Eleitores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Validação</h1>
    <h5>Digite os dados do eleitor:</h5>
</body>
</html>

    <form action="" method="post">
        <input type="text" name="id" id="ID do eleitor" placeholder="ID do eleitor">
        <input type="submit" value="Confirmar" class="botaoconfirmar">
        
    </form>
    <a href="resultado.php"><button class="botaogenerico">Resultado</button></a>
<?php
include '../base.php';


$id = $_POST['id'] ?? "";
$_SESSION['ideleitor'] = $id;
$resu = mysqli_query($conn, "SELECT id FROM tb_eleitor WHERE id = '$id'");
$comp = mysqli_query($conn, "SELECT compareceu FROM tb_eleitor WHERE id = '$id'");
while($row = mysqli_fetch_array($comp)){
    $comprow = $row["compareceu"];
};
$num_rows = mysqli_num_rows($resu);
echo '<div class="erro">';
if ($num_rows > 0 && isset($_POST['id']) && $comprow == 'nao') {
    mysqli_query($conn,"UPDATE tb_eleitor SET compareceu = 'sim' WHERE id = '$id'");
    header("Location: urna.php");
    
}  


else if(empty($id)){
echo "Campo Vazio!";
}
else if($comprow ?? "" == 'sim'){
    echo "Eleitor já votou.";
}
  else{
    echo "Eleitor não encontrado";
  }
echo "</div>";

/*while($row=mysqli_fetch_array($resu)){
    header('Location: '.$url);
}
if(!$row=mysqli_fetch_array($resu)){
    echo "Eleitor não identificado";
}*/