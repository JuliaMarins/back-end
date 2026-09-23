<?php

$nome = $_POST['nome'];
$horas = $_POST['horas'];

$horasAno = $horas * 365;
$anos = $horasAno / 24 / 365;
//feche a pasta obrigado
echo "Olá $nome <br><br>";
echo "Voce passa aproximadamente $horasAno hrs por ano <br>";
echo "Isso representa aproximadamente $anos da sua vida";

?>