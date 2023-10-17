<?php 
class Pessoa{
    function falar() {
        echo "Olá pessoal!";
    }

}

$matheus = new Pessoa();


echo $matheus->falar();
?>