<?php

     $carro= ["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];
    
     print_r($carro);
     echo "<br>";

     list($modelo, $motor, $cor, $cavalos, $adicional, $cambio) = $carro;

     echo "$modelo <br>";
     echo "$motor <br>";
     echo "$cor <br>";
     echo "$cavalos <br>";
     echo "$adicional <br>";
     echo "$cambio <br>";




?>