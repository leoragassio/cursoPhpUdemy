<?php 
/*Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.*/

echo "<h1>Impressão de números pares somados ao número cedido ao loop</h1>";
function sumEvenNumbers($inteiro){
    
    for ($i=2; $i <= $inteiro; $i++) {

        if ($inteiro > 70000) {
            echo "<p>Por medidas de segurança digite um número menor que 70.000<p>";
            break;
        }
        if ($i % 2 != 1) {
            echo "$i + $inteiro = " . $i + $inteiro . "<hr>";
        }
        
    }

}

$result = sumEvenNumbers(69999);

echo $result;


?>