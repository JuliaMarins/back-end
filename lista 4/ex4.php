<?php

$email = "seuemail@gmail.com";
$senha = "suasenhai123";
$ativo = true;
echo "login - facebook <br>";

if ($email == "seuemail@gmail.com" &&
$senha == "suasenhai123" && $ativo == true) {
    echo "login autorizado...";
}
else{
    echo "usuarios ou senha invalidos";
}
?>