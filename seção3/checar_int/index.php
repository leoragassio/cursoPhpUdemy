<?php 
if(is_int($a = 112)){
    echo true;
}else{
    echo false;
}

if(is_int($b = "Número")){
    echo true;
}else{
    echo "<br>Numero não é inteiro<br>";
}

$c = 10;

if(is_int($c)){
    echo true;
}else{
    echo false;
}

var_dump($c);
?>