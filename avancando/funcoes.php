<?php
function exibirMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}
function sacar(&$conta, $valorSacar) {
    if ($valorSacar > $conta['saldo']) {
        exibirMensagem("Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}
function depositar(&$conta, $valorADepositar) {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibirMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}
