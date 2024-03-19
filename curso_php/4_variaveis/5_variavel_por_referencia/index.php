<?php
//Podemos criar uma variável com referência a outra;

$x = 2;
$y= &$x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y=15;

echo "Atribuição após ref <br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x= 20; 
echo "Atribuição após ref 2 <br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";



?>