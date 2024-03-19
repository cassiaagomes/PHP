<?php

    // USAMOS O PONTO (.) PARA CONCATENAR
    echo "testando" . " a" . " concatenação.";
    echo "<br>";

    $t = "testando a ";
    $c = "concatenação";
    echo $t . $c;

    echo "<br>";
    $marca = "Ferrari";
    $motor = "3.0";
    $vel_max = 200;

    echo "O carro da $marca, tem motor $motor e chega a $vel_max km/h. <br>";
    echo "O carro da " . $marca . " tem motor " . $motor . " e chega a: " . $vel_max . "km/h. <br>";
?>