<?php

    $texto = "5";
    $numero1 = 12;

    $expressao = $texto * $numero1;

    echo $expressao . "<br>";

    echo gettype($expressao);
    echo "<br>";

    echo gettype([]);
    echo "<br>";

    echo gettype(12.2);
    echo "<br>";

    echo gettype("teste");
    echo "<br>";
?>