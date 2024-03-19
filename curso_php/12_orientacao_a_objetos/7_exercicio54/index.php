<?php

    class Pessoa{
        public $nome;
        public $idade;

        function andar ($x){
            echo "Caminhando $x metros";
        }
    }


    $P1 = new Pessoa;
    
    $P1->nome = "Cássia";
    echo $P1->nome . "<br>";

    $P1->idade = 23;
    echo $P1->idade . "<br>";



?>