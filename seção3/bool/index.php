<?php 

echo true ."<br>";
echo false . "<br>";

if(true){//true
    echo "é verdadeiro";
}

if (5 > 2) {
    echo "<p>Verdadeiro</p>";
}
$rg = "012345678-x";

if(is_string($rg)){
    echo "<p>RG: $rg pode entrar no sistema!</p>";
}
?>