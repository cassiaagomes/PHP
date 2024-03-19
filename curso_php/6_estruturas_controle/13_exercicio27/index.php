<?php
function compararNumeros($num1, $num2) {
    if ($num1 > $num2) {
        return "O primeiro número é maior.";
    } elseif ($num2 > $num1) {
        return "O segundo número é maior.";
    } else {
        return "Os números são iguais.";
    }
}

// Exemplo de uso da função
$num1 = 10;
$num2 = 5;
$resultado = compararNumeros($num1, $num2);
echo $resultado; // Saída: O primeiro número é maior.
?>
