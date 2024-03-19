<?php

class Pessoa {
    function falar () {
        echo "Olá pessoal!";
    }

}

$cassia = new Pessoa ();
$cassia->nome = "Cássia";

echo $cassia->nome;
echo "<br>";

$cassia->falar();

?>