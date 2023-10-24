<?php 
$a = [1, 33, 86, 9, "Julio", "Ferreira Neto", 3, false, true];
$contador = 0;

while( $contador < 9 ){
    if (is_string($a[$contador])) {
        echo $a[$contador] . "<br>";
    }
    $contador++; 
    
}
?>