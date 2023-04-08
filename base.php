<?php 
$host = "localhost:3306";
$user = "root"; 
$pass = "";
$base = "urna";
$url = "votacao.php";

$conn = mysqli_connect($host, $user, $pass, $base);


if($conn){
    echo "<br><br><br>Conectado ao banco de dados";
}
echo "<br>";