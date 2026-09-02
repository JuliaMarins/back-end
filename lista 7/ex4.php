<?php

function verificarIdade($idade){
    if($idade < 16){
        return "não pode voltar";
    }elseif($idade < 18){
        return "voto opcional";
    }else{
        return "voto obrigatorio";
    }
}
echo verificarIdade(17);