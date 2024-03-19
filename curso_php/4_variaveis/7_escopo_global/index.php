<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    if (5>2){
        $teste = "dsa";
        echo "$teste if 1 <br>";
    }
    
    echo "$teste global 2 <br>";

    function funcao(){
        $teste = "abcd";
        echo "$teste local<br>";
    }

    funcao();

    function testeglobal(){
        global $teste;
        $teste = 2;
        echo "$teste local<br>";
    }

    testeglobal();
    echo "$teste global 3 <br>";

?>