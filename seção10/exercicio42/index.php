<?php 

$frase = "Cadê meu queijo? Ele estava em cima da mesa";

$queijo = substr( $frase, 10 , 6 );
$estava = substr( $frase, 22, 6 );

echo "1 - " . $queijo . "<br>";
echo "2 - " . $estava . "<br>";

?>