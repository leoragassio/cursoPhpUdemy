<?php 
$str = "Matheus";
$num = 12;

if(is_string($str)){
    echo '<p>$str é String</p>'; 
}else{
    echo '<p>$str não é String</p>'; 
}

if (is_string($num)) {
    echo '<p>$num é string</p>';
}else{
    echo '<p>$num não é string</p>';
}

if(is_string("String")){
    echo "é string";
}
?>