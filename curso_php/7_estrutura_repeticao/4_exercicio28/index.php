<?php
    $contador = 4;
    echo "Iniciando o loop: ";
    while($contador != 30){
        echo "O X é: $contador <br>";
        
        if($contador === 24){
            echo "Terminando o loop <br>";
            break;
        }

        $contador+= 2;
    }



?>