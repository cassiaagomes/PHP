<?php

    $arrNum = [];

    function populaArray (){
        for ($i = 0; $i <10 ; $i++){
            $arrayNum = $i;
            print_r($arrayNum);
            echo "<br>";
        }
    
    }

    $arrNum2 = [];

    function populaArray2 (){
        for ($i = 7; $i <10 ; $i++){
            $arrayNum2 = $i;
            print_r($arrayNum2);
            echo "<br>";
        }
    
    }

    echo populaArray();
    echo populaArray2();
    
?>