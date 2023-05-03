<?php 
$host = "localhost:3306";
$user = "root"; 
$pass = "";
$base = "urna";
$url = "votacao.php";

$conn = mysqli_connect($host, $user, $pass, $base);


if($conn){
    echo "<footer>🟢Conexão</footer>";
}
else{
    echo "<br><br><br>🔴Banco de Dados";
}
echo "<br>";