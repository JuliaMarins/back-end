<?php

$peso = $_POST["peso"];

if ($peso > 50) {

    $excesso = $peso - 50;
    $multa = $excesso * 4;

    echo "Quantidade de peixes: $peso kg <br>";
    echo "Quantidade excedente: $excesso kg <br>";
    echo "Valor da multa: R$ $multa";

} else {

    echo "Quantidade de peixes: $peso kg <br>";
    echo "Não precisa pagar multa.";

}

?>


