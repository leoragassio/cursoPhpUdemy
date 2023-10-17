<?php 
$a = false;

if(is_bool($a)){
    echo "<p>O VALOR É BOOLEANO</p>";
    if($a == true){
        echo "<p>E É TRUE</p>";
    }else{
        echo "<p>E É FALSE</p>";
    }
}else{
    echo "<p>O valor não é bool :(</p>";
}

    if("0" == false){
        echo "<p>0 é false</p>";
    }

    var_dump(0);
?>