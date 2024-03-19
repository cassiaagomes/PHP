<?php

    class Pessoa {
        function falar (){
            echo "Olá, eu estou falando! <br>";
        }

        function cantar (){
            echo "Lá, lá, lá, lá! <br>";
        }

        function somar($x, $y){
            $resultado = $x + $y;
            echo "Agora eu estou somando $x com $y, que da: $resultado <br>";
        }
    }

    $cassia = new Pessoa;

    $cassia->falar();
    $cassia->cantar();
    $cassia->somar(3,6);


?>