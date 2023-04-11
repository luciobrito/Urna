<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado da Votação:</h1>
</body>
</html>
<?php
include '../base.php';
$resu = mysqli_query($conn,"SELECT * FROM tb_voto");
$resu2 = mysqli_query($conn,"SELECT * FROM tb_candidatos");

$votos = array();
$num_cand = array();
if (mysqli_num_rows($resu) == 0) {
    echo "Nenhum voto na urna.";
    exit;
}
while ($row = mysqli_fetch_assoc($resu)) {
    $votos[] = $row["voto"];
   
}
while($row = mysqli_fetch_assoc($resu2)){
    $num_cand[] = $row["numero"];
}
//Conta quantas vezes cada valor aparece na array
$contas = array_count_values($votos);
//Filtra os valores unicos na array
$unico = array_unique($votos);
//Compara os valores entre candidatos registrados e candidatos votados
$nulo = array_diff($votos,$num_cand);
//Coloca os votos nulos em ordem crescente;
sort($nulo);
//Conta a quantidade de valores nulos existentes.
$qnulo = count($nulo);
//Coloca os valores em ordem crescente
sort($unico);
echo "<br>";
//Conta quantos valores unicos existem na array;
$qvotos = count($votos);
$nunico = count($unico);
//Loop que se repete conforme a quantidade de valorese únicos na array
for($i = 0; $i < $nunico; $i++){
    $porcentagem = $contas[$unico[$i]] * (100 / $qvotos);
    echo " Partido $unico[$i] | Votos:   " . $contas[$unico[$i]] ."  (" .round($porcentagem,1)."%)"."<br>";
    
}

$validos = $qvotos - $qnulo;
echo "<br> Brancos e Nulos: " . $qnulo. " ( " .round($qnulo * (100/$qvotos),1) ."%)". "<br>";
echo " Votos validos: " .  $validos . " ( " .round($validos * (100/$qvotos),1) ."%)"."<br>";
echo "<br> Votos totais:" . $qvotos."<br>";

#echo "Partido $unico[0] | Votos:" . $contas[$unico[0]] . "<br> Partido $unico[1] | Votos: ". $contas[$unico[1]] ?? 0; echo "<br>Total: " . count($votos);