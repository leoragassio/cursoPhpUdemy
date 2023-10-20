<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <?php 
    $dia = "Bom dia ";
    $tarde = "Boa Tarde ";
    $noite = "Boa Noite ";
    $nome = "Leonardo ";
    $sobrenome = " Lima";


    echo "Agora são : " . date("H:i") . "<br>";
    if(date("H") <= 12){
        echo $dia . $nome. $sobrenome;
    }else if(date("H") <= 18){
        echo $tarde . $nome. $sobrenome;
    }else{
        echo $noite . $nome. $sobrenome;
    }

    
?>
</body>
</html>
