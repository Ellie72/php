<?php 

$idadeList = [21, 24, 25, 25, 26, 28];
$umaIdade = $idadeList[2];
echo $umaIdade; 
$idadeList[7] = 20;
foreach ($idadeList as $idade){
    echo $idade.PHP_EOL;
}
