<?php

$idade = 32;
$numeroDePessoas = 2;

echo "Você  só popde entrar, se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho!";
} else {
    if($idade>=16 && $numeroDePessoas > 1){
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
    } else {
    echo "Você tem $idade anos. Não pode entrar sozinho";
}
}

