<?php 

$pessoa = [
    'nome' => 'Marco',
    'sobrenome'=>'Silva',
    'idade'=>29
];

echo "<p>Bem-Vindo " . $pessoa['nome'] . " " . $pessoa['sobrenome'] . "!</p>";

if($pessoa['idade'] >= 18 ){
    echo "<p>". $pessoa['nome'] ." voce é maior de idade!" . "</p>";
}else{
    echo "Você é menor de idade";
}

?>