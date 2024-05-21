<?php
// Poderia ser o include
require 'funcoes.php';

$contasCorrentes = [
   '12345678910' => [
    'nome' => 'Patrícia',
    'saldo' => 1000
    ]
];
$contasCorrentes ['12345678910'] = sacar (
    $contasCorrentes['12345678910'],
    200
);
$contasCorrentes ['12345678910'] = depositar (
    $contasCorrentes['12345678910'],
    900
);
foreach($contasCorrentes as $cpf => $conta) {
    exibirMensagem (
        "$cpf {$conta['nome']} {$conta['saldo']}"
    );
}
?>
