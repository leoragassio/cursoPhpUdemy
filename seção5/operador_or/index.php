<?php 
if(5 > 2 || 3 < 4){//true e true
    echo "<p>if 1 é verdadeiro!</p><br>";
}

if(5 > 2 || 30 < 4){//true e false
    echo "<p>if 2 é verdadeiro!</p><br>";
}

if(1 > 2 || 1 < 4){//false e true
    echo "<p>if 3 é verdadeiro!</p><br>";
}

if(1 > 2 || 5 < 4){//false e false
    echo "<p>if 4 é verdadeiro!</p><br>";
}else{
    echo "<p>if 4 é falso!</p><br>";
}
?>