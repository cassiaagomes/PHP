<?php       

    $valores = [
        1,
        "casa",
        true,
        2.45,
        false,
        "roupa",
        "grande",
        8,
        "barreira",
        true,
    ];

    $x = count($valores);
    $y = 0;

    while($y <= $x){
        if(is_string($valores[$y])){
            echo $valores[$y] . "<br>";
        }

        $y++;
    }


?>