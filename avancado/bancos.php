<?php 
function sacar(array $conta, float $valorAsacar): array{
    if($valorAsacar>$conta['saldo']){
        exibeMensagem("Você não pode sacar");
    } else{
        $conta['saldo']-=$valorAsacar;
    }
    return $conta;
}
function debositar(array $conta, float $valorADepositar): array{
    if($valorADepositar>0){
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem("Depositor precisam ser positivos");
    return $conta;
}
function exibeMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL;
}
$contasCorrentes = [
    '1231231231231' => ['titular'=>'Vicinius', 'Saldo'=>1000],
    '1231231232312' => ['titular'=>'Maria', 'Saldo'=>10000],
    '3123122231123' => ['titular'=>'Roberto', 'Saldo'=>300],
];
$contasCorrentes['1231231232312'] = sacar($contasCorrentes['1231231232312'], valorAsacar:500);
$contasCorrentes['3123122231123'] = sacar($contasCorrentes['3123122231123'], valorAsacar:500);
$contasCorrentes['1231231231231'] = debositar($contasCorrentes['1231231231231'], valorADepositar:500);


foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem(
        mensagem:"$cpf {$conta['titular']} {$conta['saldo']}"
    );
}