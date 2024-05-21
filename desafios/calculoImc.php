<?php

//Desafio: Crie um programa que calcule o IMC de uma pessoa.

$peso = 68;
$altura = 1.67;

$imc = $peso / ($altura ** 2);

echo "seu IMC é $imc." . PHP_EOL;

if ( $imc < 18.5 ) {
    echo "Abaixo do peso.";
} elseif ( $imc < 24.9 ) {
    echo "Peso normal.";
} elseif ( $imc < 29.9 ) {
    echo "Sobrepeso.";
} elseif ( $imc < 34.9 ) {
    echo "Obesidade grau 1.";
} elseif ( $imc < 39.9 ) {
    echo "Obesidade grau 2.";
} else {
    echo "Obesidade grau 3.";
} 

