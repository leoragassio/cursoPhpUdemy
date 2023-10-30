<?php 

$str = "testando encontro da palavra teste em string que tem teste";

$ultima = strrpos($str, "teste");

echo $ultima;

if (strrpos($ultima, "java") === false ) {
    echo "<hr>NOT FOUND!";
}

?>