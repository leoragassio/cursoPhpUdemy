<?php 

function veloMax($vel){
    if (is_int($vel)) {
        echo "<p>O carro atinge $vel km/m</p>";
    }else{
        echo "<p>Por favor nos passe um número inteiro. <br> ex:188, 190, 200 ...</p>";
    }
}
veloMax(211);
veloMax(125);
veloMax(112);
veloMax(188);
echo "<hr>";
function animal($nome, $raca){
    echo "<p>O $nome é da raça $raca</p>";
}

animal("Bob", "Vira-Lata");
animal("Shark", "Poodle");
animal("Podle", "Tita");
?>