<?php

//Desafio: Imprima todos os números ímpares de 1 até 100

for ($numeros = 1; $numeros <100; $numeros ++) {
    if ($numeros % 2 !=0) {
        echo $numeros .PHP_EOL;
    }
}