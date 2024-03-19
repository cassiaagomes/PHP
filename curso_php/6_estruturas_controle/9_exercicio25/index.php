<?php   
    $num1 = 80;
    $num2 = 5;
    $texto1 = "Olá";

    $msgsim = "O Número " . $num1 . " X 2, é maior que 100";
    $msgnao = "O Número " . $num2 . " não atende aos requisitos";

    if(is_numeric($num1)){
        $multiplica = $num1 * 2;
        if ($multiplica > 100){
            echo $msgsim; 
            echo "<br>";
            } else {
                echo "Não é maior que 100";
                echo "<br>";
            }
}   else {
        echo $msgnao;
}

    if(is_numeric($num2)){
        $multiplica2 = $num2 * 2;
        if ($multiplica2 > 100){
            echo $msgsim; 
            echo "<br>";
            } else {
                echo "Não é maior que 100";
                echo "<br>";
            }
}   else {
        echo $msgnao;
}

    if(is_numeric($texto1)){
        $multiplica2 = $num2 * 2;
        if ($multiplica2 > 100){
            echo $msgsim; 
            echo "<br>";
            } else {
                echo "Não é maior que 100";
                echo "<br>";
            }
}   else {
    echo "O texto: " . $texto1 . " - não é número";
}





?>