<?php 

$str1 = "carro - navio - helicoptero - barco - jangada";

$explode1 = explode(" - ",$str1);

var_dump($explode1);

for ($i=0; $i < count($explode1); $i++) { 
    echo "Item $i -> " . $explode1[$i] . "<br>";
}

?>