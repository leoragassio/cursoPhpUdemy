<?php 

function mercado() {
    $arr = ["Arroz", "Feijão", "Ketchup", "Pão", "Contra Filé", "Batata Congelada", "Queijo Minas Padrão"];

    return implode(", ", $arr);
}

$retornoMercado = mercado();

echo $retornoMercado;


?>