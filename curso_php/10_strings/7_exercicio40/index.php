<?php

    $str = "O rato roeu a roupa do rei de Roma"; 
    $cont = 0;


    for ($x = 0; $x < strlen($str); $x++){
        if ($str[$x]== "a"){
            $cont ++;
        }
    }

    print ("A frase tem $cont letras a"); 

?>