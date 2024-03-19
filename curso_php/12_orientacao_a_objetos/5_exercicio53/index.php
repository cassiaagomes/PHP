<?php

    class Cachorro {
        function latir (){
            echo "Au au! <br>";
        }

        function andar(){
            echo "Passeando...<br>";
        }
    }

    $shitzu = new Cachorro;
    $shitzu -> latir();
    $shitzu -> andar();

    $caramelo = new Cachorro;
    $caramelo-> latir();
    $caramelo-> andar();

?>