<?php
    $peso = 59.2;
    $limite = 80;

    $msgafirm = "Pesado demais!";
    $msgnegat = "Peso dentro do limite.";

    if ($peso <= $limite){
        echo "1 - ";
        echo $msgnegat;
        echo "<br>";
    } else{
        echo "2 - ";
        echo $msgafirm;
        echo "<br>";
    }

?>