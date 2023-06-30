<?php 
$conta1 = ['titular'=>'Vicinius', 'Saldo'=>1000];
$conta2 = ['titular'=>'Maria', 'Saldo'=>10000];
$conta3 = ['titular'=>'Roberto', 'Saldo'=>300];
$contasCorrentes = [$conta1,$conta2,$conta3];

for($i=0; $i<count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['Saldo'].PHP_EOL;
}