<?php

$pessoa = [
    'nome'=> 'Cássia',
    'idade'=> 23,
    'altura'=> 1.65,
    'cor_cabelo'=> 'preto',
    'sexo'=> 'feminino', 
    'brasileira'=> true,
];

print_r($pessoa);
echo "<br>";
$nome = ($pessoa['nome']);
$idade = ($pessoa['idade']);

echo "Olá, $nome. Seja Bem-Vinda!<br>";

if ($idade >= 18){
    echo "$nome tem $idade anos.<br> Ela é maior de idade!";
}
?>