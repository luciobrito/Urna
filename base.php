<?php 
$host = "localhost:3306";
$user = "root"; 
$pass = "";
$base = "urna";
$url = "votacao.php";

try{
    $conn = mysqli_connect($host, $user, $pass, $base);
}
catch(mysqli_sql_exception){
    echo "Não conectado ao banco de dados";
}
if($conn){
    echo "<br><br><br>Conectado ao banco de dados";
}