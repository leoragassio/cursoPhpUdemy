<?php 

$frase = "Testando string no array";

$frasearray = explode(" ", $frase);
//          EXPLODE (" aqui seria o delimitador" , $de qual variavel)
echo var_dump($frasearray);
//CADA PALAVRA FICA EM UMA POSIÇÃO.

$fraseB = "Carro,Avião,Barco,Navio";
$frasearray2 = explode(",", $fraseB);
echo var_dump($frasearray2);



?>