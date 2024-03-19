<?php
    $texto = "Cássia";
    $inteiro = 12;
    $booleani = true;

    $msgsim = "O paramêtro informado é um int";
    $msgnao = "O paramêtro informado não é um int";

    if(is_int($texto)){
        echo "1- ";
        echo $msgsim;
        echo "<br>";
    } else{
        echo "2 - ";
        echo $msgnao;
        echo "<br>";
    }

    if(is_int($inteiro)){
        echo "3 - ";
        echo $msgsim;
        echo "<br>";
    } else{
        echo "4 - ";
        echo $msgnao;
        echo "<br>";
    }

    if(is_int($booleani)){
        echo "4 - ";
        echo $msgsim;
        echo "<br>";
    } else{
        echo "5 - ";
        echo $msgnao;
        echo "<br>";
    }



?>