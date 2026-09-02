<?php

echo "pizzaria - menu <br>";
echo "1 - pizzas, 2 - hamburgues,
3 - refrigentes, 4 - sobremesa, 5 - sair <br>";

$opcao = 1;

switch($opcao){
    case 1:
        echo "-queijo <br>
              -peperone <br>
              -calabresa <br>
              -frango";
        break;
    case 2:
        echo "x-salada
              x-bacon
              x-egg";
        break;
    case 3:
        echo "coca cola
              guarana
              fanta";
        break;
    case 4:
        echo "escolha a sua";
        break;
    case 5:
        echo "até mais!";
        break;
        
}