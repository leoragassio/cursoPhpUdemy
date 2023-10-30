<?php 

$url1 = "https://www.google.com";

$arrayUrl = parse_url($url1);

var_dump($arrayUrl);

echo $arrayUrl["scheme"];
echo "<br>";
echo $arrayUrl["host"];
echo "<br>";

// Outra URL

$url2 = "https://www.horadecodar.com.br/?busca=php";

$arrayUrl2 = parse_url($url2);

var_dump($arrayUrl2);

echo $arrayUrl2["scheme"] . "<br>";
echo $arrayUrl2["host"] . "<br>";
echo $arrayUrl2["path"] . "<br>";
echo $arrayUrl2["query"] . "<br>";


echo "<p> Scheme, Host, Path, Query</p>"




?>