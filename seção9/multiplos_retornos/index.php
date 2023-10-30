<?php 

function alteraDados($nome, $idade) {

    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome,$idade];

}

$dados = alteraDados("Matheus", 42);

print_r($dados);

echo "<p>Olá $dados[0], você tem $dados[1]</p>";
?>