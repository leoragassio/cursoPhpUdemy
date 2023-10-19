<?php 

$teste = "asd";
echo $teste . "<br>";
if(true){
    $teste = "dsa";
}
echo $teste;

/*--------------------*/

function função(){
    $teste = "Ola mundo";
    echo "<br>$teste"; 
}
função();
echo "<br>$teste";

function testeGlobal(){
    global $teste;

    echo "<br>$teste global da função<br>";
}
testeGlobal();

?>