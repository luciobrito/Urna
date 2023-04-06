<?php
include '../base.php';
$resu = mysqli_query($conn,"SELECT * FROM tb_voto");
$resu2 = mysqli_query($conn,"SELECT * FROM tb_candidatos");

$votos = array();
$num_cand = array();
if (mysqli_num_rows($resu) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
while ($row = mysqli_fetch_assoc($resu)) {
    $votos[] = $row["voto"];
   
}
while($row = mysqli_fetch_assoc($resu2)){
    $num_cand[] = $row["numero"];
}
$contas = array_count_values($votos);
#$unico = var_dump(array_unique($votos));
echo var_dump($num_cand);
echo "<br>";

echo "Partido 14 | Votos:" . $contas[14] . "<br> Partido 21 | Votos: ". $contas[21] . "<br> Total: " . count($votos);
echo $contas[14] * 2;
?>