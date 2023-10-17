<?php 
$carro = [
    'modelo' => 'CAMARO',
    'ano' => '2021',
    'motor' => 'MOTOR 6.2L V8',
    'preço' => 'A PARTIR DE R$ 521.390',
    'design' => 'VERSÃO CUPÊ OU CONVERSÍVEL'
];

echo "<ul>";
echo "<li> Modelo: " . $carro['modelo'] . "</li>";
echo "<li> Ano: " . $carro['ano'] . "</li>";
echo "<li> Motor:" . $carro['motor'] . "</li>";
echo "<li> Preço: " .  $carro['preço'] . "</li>";
echo "<li> Design: " . $carro['design'] . "</li>";
echo "</ul>";


?>