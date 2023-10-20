<?php 
if(5 > 10 && 10 > 5){ // false e true
    echo "entrou no if 1<br>";
}

if(50 > 10 && 10 > 5){ //true e true
    echo "entrou no if 2<br>";
}

if(50 > 10 && 10 > 500){ //true e false
    echo "entrou no if 3<br>";
}

if(50 > 100 && 10 > 500){ //false e false
    echo "entrou no if 4<br>";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a >= $b && $c >= $d){ //true e true
    echo "entrou no if 4<br>";
}

?>