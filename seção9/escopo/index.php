<?php 

$a = 10;
$b = 15;
function testeEscopo(){
    $a = 5;
    $a++;

    global $b;
    $b++;
    echo "Escopo local(na função) de a: $a <br>";
    echo "Escopo global b na FUNÇÃO: $b <hr>";

    static $c = 0;
    $c++;
    echo 'VARIAVEL: static $c:' . $c . "<hr>";
}

echo "Escopo global de a: $a <hr>";
echo "Escopo global de b: $b <hr>";

testeEscopo();
echo "Escopo global de B após FUNÇÃO: $b <hr>";
testeEscopo();// static $c aumenta apos outra invocação da função;




?>