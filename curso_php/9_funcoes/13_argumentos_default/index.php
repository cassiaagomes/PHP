<?php

    function teste($a = "teste"){
        echo " O valor de A é: $a <br>";
    }

    teste();
    teste("asd"); //O valor de a passa a ser este param informado

    function testando($b, $a = "x"){ //Inserir defaults por último
        echo " O valor de A é: $a e de B é: $b <br>";
    }


    testando(1);
?>