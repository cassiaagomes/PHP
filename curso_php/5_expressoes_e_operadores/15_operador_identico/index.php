<?php
    // verifica se o valor é igual a outro, avaliando seu tipo também;
    $num1 = 5;
    $num2 = 5;
    $num3 = 3;
    $texto = "3";

    if ($num1 === $num2){
        echo "É verdadeiro 1 <br>";
    }
    else{
        echo "É falso <br>";
    }

    if($num2 === $num3){
        echo "É verdadeiro 2 <br>";
    }
    else {
        echo "É falso 2 <br> ";
    }

    if($num3 === $texto){
        echo "É verdadeiro 3 <br>";
    }
    else{
        echo "É falso 3 <br>";
    }

?>