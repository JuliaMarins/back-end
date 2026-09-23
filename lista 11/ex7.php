<?php
$email=$_POST['email'];
$senha=$_POST['senha'];

if($email == "jmarins@gmail.com" && $senha == 'ju123'){
    echo "Login realizado com sucesso!";
}else{
    echo "Login ou senha invalido";
}
?>