<?php

    $lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

    function listaParaString ($arr){
        $str = "Você levou estes itens ao mercado: ";

        
        for ($i = 0; $i <count($arr) ; $i++){

            $str .= "$arr[$i], ";

        }

        return $str;
    }

   echo listaParaString($lista);

?>