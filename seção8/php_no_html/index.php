<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once "backend.php";
    ?>

    <h1>Seja bem vindo ao site</h1>
    <p><?=$nome?> veja as <strong>nossas ofertas!</strong></p>

    <h2>Nossos produtos:</h2>
    <ul>
    <?php foreach ($produtos as $produto): ?>
        <li><?= $produto ?></li>
    <?php endforeach?>
    </ul>
</body>
</html>