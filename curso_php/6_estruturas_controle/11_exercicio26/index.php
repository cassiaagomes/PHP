<?php
    $velocidade = 0;
    $limite = 40;


    if($velocidade < $limite){
        echo "Velocidade correta";
    } else if ($velocidade == $limite){
            echo "Velocidade no limite";
    } else if ($velocidade > $limite) {
            echo "Você foi multado por alta velocidade";
    } else {
        echo "Velocidade desconhecida";
    }



?>