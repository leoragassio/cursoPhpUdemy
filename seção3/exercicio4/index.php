<?php 
$a = 10.1;
$b = "Float?";
$c = -15.8999;

if (is_float($a)) {
    echo "É float!";
}else{
    echo "Ñ é float!";
}

echo "<p> $a </p>";
echo "<p> $b </p>";
echo "<p> $c </p>";
?>