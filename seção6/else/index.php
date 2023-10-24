<?php 
$contador = 1;
if (5 > 2) {
    echo "<p>Entrou no if $contador</p> ";
}else {
    echo "<p>Entrou no else $contador</p>";
}
$contador++;

if ("teste" === 500) {
    echo "<p>Entrou no if $contador</p>";
}else {
    echo "<p>Entrou no else $contador</p>";
}
$contador++;
// com variaveis

$a = 20;
$b = 10;

if($a < $b){
    echo "<p>Entrou no if $contador++;</p>";
}else {
    echo "<p>Entrou no else $contador</p>";
}
?>