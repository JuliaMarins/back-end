<?php

function analisarVenda($produto, $custo, $venda){
    $lucro = $venda - $custo;

    if($lucro <= 0){
        $mensagem = "prejuízo!!!";
    } elseif($lucro <= 20){
        $mensagem = "lucro baixo, mas vale a pena";
    } else {
        $mensagem = "lucro alto! inviste!!!";
    }

    echo "produto: $produto <br>";
    echo "lucro: $lucro <br>";
    echo "análise: $mensagem <br>";
}

analisarVenda("camiseta", 40, 35);