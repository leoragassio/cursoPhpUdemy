<?php 

function teste($a = 'Teste variavel default') {
    echo 'Valor de $a é: ' . $a . "<hr>";
}

teste();
teste("wasd");

function testando($b, $a = "X") { //valor default sempre por ultimo 
    echo "O valor de a é: $a e de b é $b <hr>";
}

testando("1");
testando("1", "2");

?>