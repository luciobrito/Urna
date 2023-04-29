
<?php
$myfile = fopen("resultado.log", "w");

fwrite($myfile, "Candidatos: \r");

for ($i = 0; $i < $nunico; $i++) {
    $porcentagem = $contas[$unico[$i]] * (100 / $qvotos);
    fwrite( $myfile,$nome_cand[$i]);
fwrite($myfile, "($unico[$i]) ---" . " Votos: ".  $contas[$unico[$i]]. "  (" . round($porcentagem, 1) . "%)"."\r");

}

$txt = "Votos Nulos: ".$qnulo . " (" . round($qnulo * (100 / $qvotos), 1) . "%)" . "\r" . "Votos Totais: " . $qvotos."(".round($qvotos*(100/$qvotos),1)."%)"."\r";
fwrite($myfile, $txt);

fclose($myfile);