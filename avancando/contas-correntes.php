<?php

$conta1 = [
    'nome' => 'Patrícia',
    'saldo' => 1000
];
$conta2 = [
    'nome' => 'João',
    'saldo' => 10000
];
$conta3 = [
    'nome' => 'Maria',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['nome'] . PHP_EOL;
    echo $contasCorrentes[$i]['saldo'] . PHP_EOL;
}