<?php

echo "caixa eletronico - itau <br>";
echo "1 - consulta saldo, 2 - fazer saque,
3 - fazer depósito, 4 - ver extrato, 5 - sair <br>";

$opcao = 4;

switch($opcao){
    case 1:
        echo "seu saldo é R$ 650,81";
        break;
    case 2:
        echo "qual valor?";
        break;
    case 3:
        echo "valor deposito:";
        break;
    case 4:
        echo "seu extrato de hoje é de R$ 54,97";
        break;
    case 5:
        echo "até mais!";
        break;
        
}