<?php 
$expressao = "5.2" * 12;
echo "<p>$expressao</p>";
echo gettype($expressao);
if(is_float($expressao)){
    echo "<br>Sim";
}else{
    echo "<br>Não";
}
?>
