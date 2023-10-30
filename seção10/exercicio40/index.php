<?php 

$travaLingua = "O rato roeu a roupa do rei de Roma.";
$contador = 0;
echo  "<p>$travaLingua </p>";

for ($i=0; $i < strlen($travaLingua); $i++){
  
    if ($travaLingua[$i] === "a" || $travaLingua[$i] === "A") {
        $contador++;
    }    
    
}

echo "<p>O trava lingua acima contem $contador letras a.</p>";
?>