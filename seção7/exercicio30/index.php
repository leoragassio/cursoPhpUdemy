

<?php 

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$a = count($arr);

echo "<h1>Numeros pares:</h1>";
for ($i=0; $i < $a ; $i++) { 

    if($arr[$i] % 2 === 0){
        echo "<p>Número $arr[$i] do array é par!<p>";
    }
    
}
echo "<h1>Numeros impares:</h1>";
for ($i=0; $i < $a ; $i++) { 

    if($arr[$i] % 2 === 1){
        echo "<p>Número $arr[$i] do array é ímpar!<p>";
    }
    
}
?>