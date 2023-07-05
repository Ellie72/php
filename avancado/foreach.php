<?php 
$contasCorrentes = [
    '1231231231231' => ['titular'=>'Vicinius', 'Saldo'=>1000],
    '1231231232312' => ['titular'=>'Maria', 'Saldo'=>10000],
    '3123122231123' => ['titular'=>'Roberto', 'Saldo'=>300],
];
$contasCorrentes['1231231232312'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];
foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf.PHP_EOL;
}