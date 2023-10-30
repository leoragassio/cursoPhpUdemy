<?php 

function soma($a, $b){
    //Mostra os argumentos recebidos
    print_r(func_get_args());

    echo "<hr>";

    //mostra a quantidade de argumentos recebidos
    print_r(func_num_args());
    
    return $a + $b;
}

soma(2,4);

?>