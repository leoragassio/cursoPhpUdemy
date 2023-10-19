<?php 
echo '<h2>$a tem valor 12 e $b tem o mesmo valor que $a</h2>';
$a = 12; // a recebe 12
echo "<p>$a</p> ";
$b =& $a; // recebe referencia de a
echo "<p>$b</p> "; 
$a += 12;// a recebe + 12
echo "<mark>a += 12</mark>";
echo "<p>$a</p> "; 
echo "<p>$b</p>"; 
$b += 10;
echo "<mark>b += 10</mark>";
echo "<p>$a</p> "; 
echo "<p>$b</p>";

echo "<h3>Ou:</h3>";

echo '<h2>$nome1 tem valor "João" e $nome2 tem o mesmo valor que $nome1 </h2>';
$nome1 = "João";
$nome2 =& $nome1;

echo "<p>$nome1</p>";
echo "<p>$nome2</p>";

$nome2 = "Jaime";
echo '<p><mark>$nome2 = "Jaime"</mark></p>';
echo "<p>$nome1</p>";
echo "<p>$nome2</p>";

echo '<p><mark>$nome1 = "$nome1 da Costa"</mark></p>';
$nome1 = "$nome1 da Costa";

echo "<p>$nome1</p>";
echo "<p>$nome2</p>";

?>