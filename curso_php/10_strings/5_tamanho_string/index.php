<?php

    $nome = "Cassia";

    $fraseTeste = "Bom dia princesa, por favor sente na glock";

    $tamanhoNome = strlen($nome);
    $tamanhoFrase = strlen($fraseTeste);

    print("$tamanhoFrase <br>");
    print("$tamanhoNome <br>");

    if($tamanhoNome < $tamanhoFrase){
        print("o nome $nome é menor do que $fraseTeste <br>");
    } else {
        print ("A frase $fraseTeste é maior que o nome $nome <br>");
    }
?>