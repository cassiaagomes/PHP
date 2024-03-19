<?php
    function numQuadrado ($num){
        $valorQuadrado= $num * $num;
        return $valorQuadrado;
    }

    $resultado = numQuadrado(3);
    echo "O número ao quadrado é: " . $resultado . "<br>";
    $resultado = numQuadrado(9);
    echo "O número ao quadrado é: " . $resultado . "<br>";


?>