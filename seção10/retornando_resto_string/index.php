<?php 

$str = "Testando o resto da string, pra ver se da certo";

$busca = "st";

$resto = strstr($str, $busca);

echo "$resto";

if (strstr($str, ".NET") === false) {
    # code...
    echo "<br> <h1>NOT FOUND 404</h1> <br>";
}

?> 