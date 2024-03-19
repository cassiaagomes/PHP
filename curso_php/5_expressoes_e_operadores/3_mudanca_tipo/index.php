<?php

    /*EVITAR AUTOCAST(CONVERSÃO DE TIPOS INDESEJADOS)
    * SEMPRE VERIFICAR OS TIPOS
    */
    echo 5 / 2;
    echo "<br>";

    if (is_float(5/2)) {
        echo "É float <br>";
    }


    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)){
        echo "É string <br>";
    }

    $nome = "Cássia";
    $sobrenome = "gomes";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;

?>