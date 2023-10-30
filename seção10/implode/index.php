<?php 

$arr = ["Maça", "Pera", "Uva", "Melancia"];

$implode1 = implode(", " , $arr);

echo $implode1;

$meses = array(
    1 => 'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);

$implode2 = implode("<br> -> ", $meses);

echo $implode2;

?>