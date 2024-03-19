<?php

$nome = "Cássia";
$idade = 23;
$brasileira = true;

$array = [$nome, $idade, $brasileira];
print_r($array);
echo "<br>";

echo "Olá, $nome. Boa noite! Sua idade é $idade anos.<br>";
if ($brasileira == true) {
    echo "Você é brasileira!";
}

?>