<?php
    $array = [];

    for($i= 10; $i < 20; $i++){
        array_push($array, $i);
    }

    print_r($array);
    echo "<br>";

    for ($j= 0; $j < count($array); $j++){
        if ($array[$j] % 2 == 1){
            echo "<br>";
            echo "O número $array[$j] é ímpar <br>";
        }
    }





?>