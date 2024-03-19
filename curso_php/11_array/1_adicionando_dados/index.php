<?php

    $array = [];
    $array[0] = 0;
    $array[1] = 1;
    $array[2] = 2;

    print_r($array);
    echo "<br>";

    $array[5] = 5;
    print_r($array);
    echo "<br>";

    $array[4] = 4;
    print_r($array);
    echo "<br>";


    //MODIFICANDO VALORES
    $array[1] += 55;
    print_r($array);

?>