<?php
    function defineCorCarro ($cor = "Vermelha"){
        return "A cor do carro é: $cor";

    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho . "<br>";
    
    $carroPreto = defineCorCarro("Preto");
    echo $carroPreto . "<br>";

?>