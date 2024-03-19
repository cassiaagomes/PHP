<?php
    //DEFINIÇÃO DO CONTADOR
    $cont = 0;
    echo "Incrementando... <br>";
    echo "<br";
    //INCIO / DEFINIÇÃO DA ESTRUTURA
    while($cont!=10){

        // CORPO DO WHILE
        echo "Bom dia! <br>";

        //INCREMENTO DO CONTADOR
        $cont++;
    }

    //DEFINIÇÃO DO CONTADOR
    $cont2 = 0;
    echo "Incrementando... <br>";
    echo "<br";
    //INCIO / DEFINIÇÃO DA ESTRUTURA
    while($cont2!=50){
    
        // CORPO DO LOOP
        echo $cont2 . "<br>";
    
        //INCREMENTO DO CONTADOR
        $cont2+=2;
    }

    //DEFINIÇÃO DO CONTADOR
    $cont3 = 50;
    echo "Decrementando...<br>";
    echo "<br";
    //INCIO / DEFINIÇÃO DA ESTRUTURA
    while($cont3!=0){
    
        // CORPO DO LOOP
        echo $cont3 . "<br>";
    
        //DECREMENTO DO CONTADOR
        $cont3-=2;
    }

?>