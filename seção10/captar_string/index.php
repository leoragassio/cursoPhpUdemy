<?php 

$str1 = "Esta é a minha string";

$minha = substr($str1, 10, 5);

echo $str1 . "<br>";
echo $minha . "<br>";

$str2 = "Testando essa string!<br>";

$novaString = substr($str2, 0,11);

echo $novaString;
?>