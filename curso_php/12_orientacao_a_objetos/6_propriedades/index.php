<?php

    class Car{
        public $rodas = 4;
        public $aro = 20;
        public $cor = "vermelha";

        function ligar (){
            echo "vrummmmm <br>";
        }
    }


    $ferrari = new Car;

    echo $ferrari->aro . "<br>"; 
    echo $ferrari->rodas . "<br>"; 
    echo $ferrari->cor . "<br>"; 

    $ferrari->cor = "azul";
    echo $ferrari->cor . "<br>"; 

    $ferrari->ligar();

?>