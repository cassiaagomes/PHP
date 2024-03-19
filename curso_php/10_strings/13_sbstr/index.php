<?php

    $str = "Essa é a minha string";

    $minha = substr($str, 10, 5);

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string abc";

    $novaString = substr($str2, 8, -3);
    echo $novaString . "<br>";

?>