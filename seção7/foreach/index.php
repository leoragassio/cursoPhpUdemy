<?php 

$nomes = ["Matheus", "João", "Maria", "Joana", "Gustavo"];
$a = 10;
foreach($nomes as $nome){
    echo "O nome do inde atual é: $nome <br>";
    if ($nome == "Matheus") {
        echo "Opa $a!!";
    }
}

?>