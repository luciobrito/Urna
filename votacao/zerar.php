<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>alert("Urna Zerada!");
window.location.href = "resultado.php";
</script>
<body>
    
</body>
</html>
<?php
include '../base.php';

    mysqli_query($conn, "DELETE FROM tb_voto;");

