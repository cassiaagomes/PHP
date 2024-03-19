<?php

    include_once "backend.php";

?>

<h1> Seja bem-vindo</h1>
<p><?= $titulo; ?> veja as nossas ofertas </p>

<h2>Confira nossos principais produtos:</h2>
<ul>
    <?php foreach($array as $array) : ?>
    <li><?= $array; ?></li>
    <?php endforeach; ?>
</ul>

