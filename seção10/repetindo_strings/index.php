<?php 

$str = "string teste<br>";

$stringRepeat = str_repeat($str, 10);
echo "<h1>Com for</h1>";
for ($i=0; $i < 10 ; $i++) { 
    $str = " $i - string teste<br>";
    echo $str;
}
echo "<h1>Com str_repeat</h1>";
echo $stringRepeat;

?>