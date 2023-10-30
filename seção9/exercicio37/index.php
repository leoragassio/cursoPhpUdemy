
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is color car?</title>
    <style>
        div{
            width: 100px;
            height: 100px;
            text-align: center;
            border-radius:10px;
            border: 1px solid black;
            box-shadow: 1.5px 1.5px 4px black;
        }
        div > p {
            display: inline-flex;
            justify-content: center;
        }
    </style>
</head>
<body>

    <h1>Cores dos carros</h1>

<?php 

    function defineCorCarro($cor = "red"){

    return "<p>A cor do carro é: $cor<p> <div style=". "background-color:$cor; " . "> <p>Carro</p></div> <hr>";
    ;
    }
    echo "Ex:";
    $corDefinida = defineCorCarro();
    echo "$corDefinida ";

    // $usuarioImprime = defineCorCarro();
?>
    <p>Nos informe uma cor (em inglês, please!)</p>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    
    <input type="text" name="cor" id="cor" placeholder="blue, red, grey, yellow..." required >
    <input type="submit" value="Enviar">

    </form>

    <?php 
    $cor = $_POST["cor"] ?? "yellow";
    $usuarioImprime = defineCorCarro($cor);

    echo $usuarioImprime;
    ?>

</body>
</html>

