<?php
   
    $idade = 25;
    $idade2 = 11;
    $maioridade = 18;

    $idade1 = (int) 18;
    echo $idade1 . "  <br> oi <br>";

    $variavel = (int) " <br> string";
    echo gettype($variavel);

     $msgposi = "Você é tem mais de 18 anos";
     $msgneg = "Você tem menos de 18 anos";

    if ($idade >=  $maioridade){
         echo "1 - ";
         echo $msgposi;
         echo "<br>";
     }
         else {
             echo "1 - ";
             echo $msgneg;
             echo "<br>";
     }

     if ($idade2 >=  $maioridade){
         echo "2 - ";
         echo $msgposi;
         echo "<br>";
     }
         else {
             echo "2 - ";
             echo $msgneg;
     }

?>