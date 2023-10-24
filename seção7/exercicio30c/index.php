<?php 

$arr = [];

for ($i = 10; $i <= 20 ; $i++) { 
    array_push($arr, $i);
}

$b = count($arr);
$contador = 1;
for ($i=0; $i < $b; $i++) { 
    if ($arr[$i] % 2 == 1) {
        
        echo "<p>R$$arr[$i],00 - Item $contador</p>";
        $contador++;
    }
}

?>