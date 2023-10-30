<?php 
//principal função do str, é por conta do banco de dados salvar da maneira como se foi escrita no campo e com os devidos espaços.

$str1 = "             Matheus            ";
  
echo "<p>Essa é a string 1:$str1.</p>";

$strLimpa = trim($str1);

echo "<p>Essa é a string 1 limpa: $strLimpa.</p>";

$str1Ltrim = ltrim($str1);
$str1Rtrim = rtrim($str1);

echo "<p>Essa é a string 1 limpa na esquerda :$str1Ltrim.</p>";
echo "<p>Essa é a string 1 limpa na direita: $str1Rtrim.</p>";
echo "<p>Percebe-se que os espaços ainda são deixados com ltrim() e rtrim()</p>";

?>