<?php

    $contador = 1;
    while ($contador < 10){
        echo "Loop externo: $contador <br>";

        $contint = 1;

        while ($contint <= 5){
            echo "Loop interno: $contint <br>";
            
            $contint ++;
            

        }

        $contador ++;
        

    }


?>