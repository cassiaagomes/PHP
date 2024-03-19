<?php

    $num1 = 10;
    $num2 = 15;
    $num3 = 14;
    $num4 = 3;

    if($num1 % 2 == 0){
        echo "O resto da divisão de ($num1 / 2) é zero.<br>$num1 é par!<br>";
    }

    if($num2 % 2 == 1){
        echo "O resto da divisão de ($num2 / 2) é 1. <br>$num2 é impar!<br>";
    }

    echo $num3 % $num4;
    echo "<br>";

?>