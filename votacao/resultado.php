<?php
include '../base.php';
$resu = mysqli_query($conn,"SELECT * FROM tb_voto");
$resu2 = mysqli_query($conn,"SELECT * FROM tb_candidatos");
while($escrever=mysqli_fetch_array($resu)){
    echo $escrever['voto'] . ' ';

}
    
