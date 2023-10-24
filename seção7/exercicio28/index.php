<?php 
$num = 0;
while($num < 30){
    
    echo "<p>Executando o loop " . $num . "</p>";
    $num+=2;
    if($num === 24){
        echo "chegou no $num Fim do While!";
        break;
    }
}

?>