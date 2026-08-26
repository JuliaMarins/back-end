<?php

$peso = 75;
$altura = 1.67;
$resultado = $peso / ($altura * $altura);

echo "Seu IMC é: " . $resultado . "<br>";

if ($resultado < 19) {
    echo "Abaixo do peso";
} elseif ($resultado < 19) {
    echo "Peso normal";
} elseif ($resultado < 25) {
    echo "Sobrepeso";
} elseif ($resultado < 30) {
    echo "Obesidade grau 1";
} elseif ($resultado < 39) {
    echo "Obesidade grau 2";
} else {
    echo "Obesidade grau 3";
}