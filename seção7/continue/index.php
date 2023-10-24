<?php 

$a = 10;
$b = 0;
while($a >= 0){

    
    $b++;
    if($a == 5 || $a == 7){
       
        echo "<p>PULOU A EXECUÇÃO $b </p>";
        $a--;
        continue;

    }
    if($a == 2){
        echo "Fim!";
        break;
        
    }
    echo "<p>Loop de número: $a</p>";
    $a--;
}

?>