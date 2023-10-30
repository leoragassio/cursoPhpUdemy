<?php 

function parImpar($a){
    if($a % 2 == 0){
        echo "<p>O número $a:é par</p>";
    }else {
        echo "<p>O número $a:é ímpar</p>";
    }

}

parImpar(923);
parImpar(323);
parImpar(2123);
parImpar(23);
?>