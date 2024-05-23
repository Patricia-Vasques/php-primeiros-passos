<?php
require 'funcoes.php';

$contasCorrentes = [
   '12345678910' => [
    'titular' => 'Patricia',
    'saldo' => 1000
   ],
   '12345678911' => [
    'titular' => 'Maria',
    'saldo' => 1000
   ],
   '12345678912' => [
    'titular' => 'João',
    'saldo' => 1000
   ],

];
$contasCorrentes ['12345678910'] = sacar (
    $contasCorrentes['12345678910'],
    200
);
$contasCorrentes ['12345678910'] = depositar (
    $contasCorrentes['12345678910'],
    900
);

//unset exclui um elemento do array
unset ($contasCorrentes['12345678911']);

titularComLetrasMaiusculas (
    $contasCorrentes['12345678910']
);

echo "<ul>";

foreach($contasCorrentes as $cpf => $conta) {
    exibirConta (
        $conta
    );
}
echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>

</html>