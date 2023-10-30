<?php 

function arr(){
    $arr = [];
    for ($i=8; $i < 30 ; $i++) { 
        array_push($arr,$i);
    }
    return $arr;
}
$a = arr();

foreach ($a as $b){
    echo "$b ";
}

?>