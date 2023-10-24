<?php 

$x = 0;

while($x < 10){
    echo "O x é $x<br>";
    if($x === 5 ){
        echo "Termino do loop<br>";
        break;
    }
    $x++;
}

echo "Saiu do loop<br>";
?>