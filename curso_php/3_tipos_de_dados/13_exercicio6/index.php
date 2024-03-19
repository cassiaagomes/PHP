<?php

$carro = 
["modelo" => "Kwid",
 "cor" => "Azul", 
 "rodas" => 4,
 "teto_solar" => true,
 "motor" => 1.6
];

print_r($carro);
echo "<br>";
$modelo = $carro ["modelo"];
$motor = $carro ["motor"];

echo "O carro é um $modelo e tem um motor $motor.";


?>