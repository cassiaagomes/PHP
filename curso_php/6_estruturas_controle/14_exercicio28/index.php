<?php
    function verificarAcesso ($idade, $autorizacao){
        if ($idade >= 18 && $autorizacao){
            echo "Acesso autorizado";
        } else if ($idade < 18 ){
            echo "Idade mínima requerida: 18anos";
        }  else if ($idade >= 18 && !($autorizacao)){
            echo "Acesso negado. Autorização necessária";
        }
    }

echo verificarAcesso(20, true); 
echo verificarAcesso(15, false); 
echo verificarAcesso(25, false);
?>