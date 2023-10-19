<?php 
function teste(){
    $a = 0;
    $a ++;

    echo"<p>$a</p>";
}
teste();
teste();
teste();

function estatica(){
    static $var1 = 0;
    $var1 ++;
    $var2 = 0;
    $var2 ++;
    echo "Variavel static:$var1 <br>";
    echo "Variavel sem static:$var2<br>";
} 
estatica();
estatica();
estatica();
?>