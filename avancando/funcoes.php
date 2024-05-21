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

//Ao colocar & antes do parâmetro, estamos passando a referência da variável, e não uma cópia dela.
function titularComLetrasMaiusculas(array &$conta) {
    // strtoupper coloca toda a string em letra maiúscula
   $conta['titular'] =  strtoupper ($conta['titular']);
   echo $conta['titular'] . PHP_EOL;
}
