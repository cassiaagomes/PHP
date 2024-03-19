<?php

    class Carro{
        public $cor; 
        public $tetoSolar;
        public $velMax;

        function setVelMax($vel){
            $this->velMax = $vel;
        }

        function getVelMax(){
            echo "A velocidade máxima deste carro é: $this->velMax km/h <br>";

        }


    }

    $fusca = new Carro;

    $fusca->cor = "Preto";
    $fusca->tetoSolar = "Sem teto solar";
    $fusca->setVelMax(120); 
    $fusca->getVelMax();

?>