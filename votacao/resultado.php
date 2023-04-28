<?php 
session_start();
if (!$_SESSION['id']) {
    header("Location: ../index.php");
    exit; 
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Resultado da Votação:</h1>
    
    
</body>

</html>
<?php
include '../base.php';
$resu = mysqli_query($conn, "SELECT * FROM tb_voto");
$resu2 = mysqli_query($conn, "SELECT * FROM tb_candidatos");

$votos = array();
$num_cand = array();

if (mysqli_num_rows($resu) == 0) {
    echo "Nenhum voto na urna.";
    exit;
}
//Preenche as arrays com os valores encontrados no banco
while ($row = mysqli_fetch_assoc($resu)) {
    $votos[] = $row["voto"];
}
while ($row = mysqli_fetch_assoc($resu2)) {
    $num_cand[] = $row["numero"];
}

$contas = array_count_values($votos);

$unico = array_unique($votos);
//Faz a relação entre candidatos registrados e os votos da urna.
$nulo = array_diff($votos, $num_cand);
//Coloca os valores em ordem crescente e conta a quantidade de valores existentes
sort($nulo);
sort($unico);
$qnulo = count($nulo);
$qvotos = count($votos);
$nunico = count($unico);

$nome_cand = array();
for($i=0;$i<$nunico;$i++){
$resu3 = mysqli_query($conn, "SELECT nome FROM tb_candidatos WHERE numero = $unico[$i];");
//Se o Nome do Candidato for encontrado no banco, este é acrescentado na array
if ($row = mysqli_fetch_array($resu3)) {
    $nome_cand[] = $row["nome"];
}
//Caso contrário será preenchido como nulo
else{
    $nome_cand[] = "Nulo";
}}
?><table><tr><th>Nome</th><th>Número</th><th>Quantidade de Votos</th><tr><?php
for ($i = 0; $i < $nunico; $i++) {
    $porcentagem = $contas[$unico[$i]] * (100 / $qvotos);
    echo "<tr>"."<td>";
    //Coloca o nome dos candidatos em ordem númerica na tabela
    echo $nome_cand[$i] ?? "Nulo";
    echo "</td>"."<td>". $unico[$i] ."</td><td>" .$contas[$unico[$i]] . "  (" . round($porcentagem, 1) . "%)" . "</td></tr>";
}
?> </table> <?php
$validos = $qvotos - $qnulo;
echo "<br> Brancos e Nulos: " . $qnulo . " ( " . round($qnulo * (100 / $qvotos), 1) . "%)" . "<br>";
echo " Votos validos: " .  $validos . " ( " . round($validos * (100 / $qvotos), 1) . "%)" . "<br>";
echo "<br> Votos totais: " . $qvotos . "<br>";
#echo "Partido $unico[0] | Votos:" . $contas[$unico[0]] . "<br> Partido $unico[1] | Votos: ". $contas[$unico[1]] ?? 0; echo "<br>Total: " . count($votos);
echo '<footer><form action="zerar.php"><input type="submit" value="Zerar Urna" name="submit" class="botaovermelho"></form>';
echo '<a href="arquivo.txt" download><button class="botaogenerico">Baixar Resultado</button></a></footer>';
?>
<?php
include 'txtgen.php';