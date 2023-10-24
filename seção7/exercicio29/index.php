<?php 

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$a = 0;
$b = count($arr);


while ( $a < $b ){

    if($arr[$a] == 30 || $arr[$a] == 40){
        echo "<p> SKIPPED VALUE: $arr[$a]!</p>";
        $a++; 
        continue;
        
    }

    echo "<p> $arr[$a] </p>";
    $a++;
}

?>
