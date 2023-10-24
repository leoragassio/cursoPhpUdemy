<?php 

$i = 1;
while($i <= 10){
    echo "<p>Loop externo $i </p>";
    $i++;

    $j = 1;//segundo contador
    while($j <= 5){
        echo "<p>Loop interno = $j</p>";
        $j++;
    }
}

//executa interno(10) * loops externos(5) = 50

?>