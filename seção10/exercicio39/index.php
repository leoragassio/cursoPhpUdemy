<?php 
$arr = [
    "God Of War 3 - Ps4" => 50,
    "Ps4 Slim" => 1900,
    "Ps5 2TB" => 3600,
    "Pen Drive Sandisk - 2GB" => 10,
    "Cabo Usb 3.0" => 5
    ];

function caracter($arr){
    $itensCaros = [];
   
    foreach($arr as $item => $preco) {
        if ($preco <= 10) {
            array_push($itensCaros, $item);
        }
    }
      return $itensCaros;
}

$novoArr = caracter($arr);

print_r($novoArr);


?>