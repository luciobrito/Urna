
<?php
$myfile = fopen("resultado.log", "w");


$txt = "Votos Nulos: ".$qnulo . " (" . round($qnulo * (100 / $qvotos), 1) . "%)" . "\r" . "Votos totais: " . $qvotos;
fwrite($myfile, $txt);
fclose($myfile);