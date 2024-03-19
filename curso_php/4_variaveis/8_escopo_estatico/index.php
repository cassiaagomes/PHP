<?php

    function teste() {
        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste();
    teste();
    teste();

    function testeStatic() {
        static $a = 0; // esse escopo vai ser mantido e o valor vai ser incrementado ou decrementado;
        $a++;

        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();

?>