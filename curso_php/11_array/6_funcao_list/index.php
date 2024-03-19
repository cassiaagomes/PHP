<?php
    
    $pessoa = ["Cassia", 23, "Programadora", "Azul"];
    print_r($pessoa);
    echo "<br>";
    
    list($nome, $idade, $profissao, $cor) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$cor <br>";

?>