<?php 

$nome = "Matheus";
$sobrenome = "Di Paoli"
?>

<form action="<?= $_SERVER["PHP_SELF"]?>" method="get">

<input type="text" name="nome" id="nome" value="<?=$nome?>" required>
<input type="text" name="sobrenome" id="sobrenome" value="<?=$sobrenome?>" required>
<input type="submit" value="enviar">

</form>

<?php 
$nome_recebido = $_GET['nome'];
$sobrenome_recebido = $_GET['sobrenome'];
echo "Bem Vindo $nome_recebido $sobrenome_recebido";

?>