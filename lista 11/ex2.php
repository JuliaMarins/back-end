<?php

$valor = $_POST["valor"];
$dinheiro = $_POST["dim"];

if($dinheiro < $valor){
    echo "falta money";
}
else{
    echo "O troco é: ", $dinheiro - $valor;

}
?>