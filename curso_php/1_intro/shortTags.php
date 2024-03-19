<?php
/*
Em algumas aulas do curso foi utilizado um recurso chamado short tags, exemplo:

<?= $nome ?>



É uma forma interessante de imprimir dados pois há um echo implícito, deixando a parte do front-end onde mistura-se o HTML e o PHP mais legível

Por este motivo, escolhi esta abordagem para algumas exibições

Porém nas versões mais recentes do PHP o uso vem sendo desencorajado, e provavelmente o recurso será removido

A boa notícia é que para resolver o problema é muito fácil!

Sempre que você se deparar com um erro, referente as short tags, utilize a seguinte sintaxe:



<?php echo $nome; ?>



É equivalente ao primeiro exemplo exibido nesta explicação, só que sem as short tags!

Temos aqui que utilizar o echo para garantir a impressão dos valores, e consequentemente o HTML acaba ficando maior, porém adequado as 'novas regras' do PHP



Um abraço e bom curso!
*/
?> 