<?php 
$teste = (int) "testando";

$num1 = (int)"12.9";

$verdadeiro = (int) true;

$arraycast = (int) [1, 2, 3];


echo "<p>$teste </p>";
var_dump($teste);

echo "<p>$num1 </p>";
var_dump($num1);

echo "<p>$verdadeiro </p>";
var_dump($verdadeiro);

echo "<p>". $arraycast . "</p>";
var_dump($arraycast);

?>