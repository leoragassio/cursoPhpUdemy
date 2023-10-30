<?php 

$str = "Estamos testando o método strpos, com esse método encontramos strings por algum motivo :|";


$testeEncontrar = strpos($str, "strpos");

echo "Está no indice " . $testeEncontrar;

$testeEncontrar = strpos($str, "JavaScript");

if ($testeEncontrar == false) {
    echo "<br>Não foi possivel encontrar a palavra";
}
echo $testeEncontrar;

//não são apenas palavras completas ! 
//caso tenha uma parte da palavra tbm irá encontrar;

?>