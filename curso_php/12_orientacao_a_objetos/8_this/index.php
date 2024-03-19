<?php

    class Animal {

        public $nome;

        function escolherNome($nome){
            $this->nome = $nome;
        }

        function latir(){
            return "au au <br>";
        }

        function latirForte(){
            return strtoupper($this->latir());
        }
    }

    $biscoito = new Animal();

    $biscoito->escolherNome("Biscoito");

    echo "O nome do animla é: $biscoito->nome <br";

    echo $biscoito->latir();

    echo $biscoito->latirForte();

?>