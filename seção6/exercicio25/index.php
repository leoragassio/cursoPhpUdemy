<?php 
$a = 123;
$b = "João Ferreira";
$c = 29.2;
$d = "Gustavo";

if(is_int($a)){
    $e = $a * 2;
    if ($e > 100) {
        echo "O novo valor é maior que cem ( 100 )";
    }else {
        echo "O novo valor não é maior que cem ( 100 )";
    }
}
?>