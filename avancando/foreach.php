<?php

$contasCorrentes = [
   12345678910 => [
    'nome' => 'Patrícia',
    'saldo' => 1000
], 
   12345678911 => [
    'nome' => 'João',
    'saldo' => 10000
], 
   12345678912 => [
    'nome' => 'Maria',
    'saldo' => 300
]
];

$contasCorrentes [12345678456] = [
     'nome' => 'Joana',
     'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}