<?php 

echo "<h2>Loop 1</h2>";
//definição do contador
$x = 0;

//definição da estrutura
while($x < 10){
    //corpo do loop
    echo "$x é menor que 10<br>";
    $x++; //incremento do contador (de 1 em 1)
}

echo "<br>";
echo "<h2>Loop 2</h2>";
$y = 0;

while($y < 10){
    //corpo do loop
    echo "$y é menor que 10<br>";
    $y += 2; //incremento do contador (de 2 em 2)
}
echo "<br>";
echo "<h2>Loop 3</h2>";
$z = 10;

while($z > 0){
    //corpo do loop
    echo "$z é menor que 10<br>";
    $z--; //decremento do contador (de 1 em 1)
}
echo "<br>";
echo "<h2>Loop 4 - Apenas impares</h2>";
$b = 10;
while($b > 0){
    if($b % 2 == 1){
      echo "$b é maior que 0<br>";  
    }
    $b--;
}

echo "<br>";
echo "<h2>Loop 4 - Apenas Pares</h2>";
$b = 10;
while($b > 0){
    if($b % 2 == 0){
      echo "$b é maior que 0<br>";  
    }
    $b--;
}


?>