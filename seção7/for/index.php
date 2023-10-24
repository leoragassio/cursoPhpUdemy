<?php 
//ORDERM DO FOR:(CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO)
for ($i=0; $i < 10 ; $i++) { 

    if ($i === 3 || $i === 7) {
        echo "<p>$i PULADO ! </p>";
        continue;
    }
    echo "<p>i = $i ! </p>";
}

?>