<?php 

$veloCarro = 70;

if ($veloCarro < 40) {
    echo"<p>Você está na velocidade correta.</p>";
}else if ($veloCarro == 40){
    echo "<p>Tome cuidado...</p>";
}else{
    echo "<p>VOCÊ FOI MULTADO! Velocidade acima do permitido!</p>";
}

?>