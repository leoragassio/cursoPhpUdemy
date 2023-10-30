<?php 

$textoHtml = "<div><p>Testando paragrafo em html com tags</p></div><hr>";
echo $textoHtml;

$salvarNoBanco = strip_tags($textoHtml);

echo $salvarNoBanco;
?>