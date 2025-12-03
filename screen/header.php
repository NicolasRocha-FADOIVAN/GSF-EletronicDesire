<?php
session_start();

include_once 'frontier/accountFrontier.php';
include_once 'frontier/productFrontier.php';
include_once 'components/headerComponents.php';

?>

<link rel="stylesheet" href="./screen/css/header.css">
<header>
    <div class="menu-icon">☰</div>
    <div class="header-logo">
        <img src="./screen/assets/EDG.png" alt="Logo Electronic Desire Gaming" />
    </div>
    <form class="search-bar" method="POST">
        <input type="text" name="searchBar" placeholder="Busque seus produtos aqui!" />
        <button type="submit" name="searchProduct">➤➤</button>
    </form>
    <div class="user-options">

        <?php profile(); ?>

        <span class="icons">
            <span title="Ajuda"><a href="index.php?route=#"><img class="ajuda" src="./screen/assets/header/suporte.png" alt="Ícone de ajuda/suporte" /></a></span>
            <span title="Favoritos"><a href="index.php?route=favorites"><img class="favorito" src="./screen/assets/header/favoritos.png" alt="Ícone de favoritos" /></a></span>
            <span title="Carrinho"><a href="index.php?route=cart"><img class="carrinho" src="./screen/assets/header/carrinho.png" alt="Ícone do carrinho de compras" /></a></span>
        </span>
    </div>
</header>