<?php

    function parImpar($numero){
        if($numero % 2 == 0){
            echo "O número $numero é par <br>";
        } else if ($numero % 2 ==1) {
            echo "O número $numero é ímpar <br>";
        }
    }

    parImpar(4);
    parImpar(9);
    parImpar(853);
    parImpar(2);
    parImpar(10);
?>