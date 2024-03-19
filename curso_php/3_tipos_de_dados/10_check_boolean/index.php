<?php

$teste = true;

if (is_bool($teste)) {
    echo "É Boleano! <br>";
}

if(is_bool(0 == false)) {
    echo "0 é Boleano (false)! <br>";
}

if(is_bool(false)){
    echo "Oxe? É booleano. <br>";
}
?>