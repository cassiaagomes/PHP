<?php
function countVowels($string) {
   
    $count = 0;
    
    
    $string = strtolower($string);
    
    
    for ($i = 0; $i < strlen($string); $i++) {
        
        if (in_array($string[$i], ['a', 'e', 'i', 'o', 'u'])) {
           
            $count++;
        }
    }
    
    
    return $count;
}


$texto = "Esta é uma string de exemplo";
echo "Número de vogais: " . countVowels($texto);

?>
