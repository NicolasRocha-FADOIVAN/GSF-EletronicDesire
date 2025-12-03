<?php

require 'screen/header.php';

#CRIA VARIÁVEL QUE SERÁ USADA PARA PEGAR PARTE DA URL
$route = $_GET['route'] ?? 'home';

#UTILIZA O SWITCH CASE PARA DIRECIONAR O USUÁRIO PARA ALGUMA TELA ESPECÍFICA
switch ($route) {

    case 'home':
    default:
        require 'screen/home.php';
    break;

    case 'search':
        require 'screen/search.php';
    break;

    case 'login':
        require 'screen/login.php';
    break;

    case 'register':
        require 'screen/register.php';
    break;

    case 'product':
        require 'screen/product.php';
    break;

    case 'cart':
        require 'screen/cart.php';
    break;
    
    case 'products':
        require 'screen/products.php';
    break;

    case 'favorites':
        require 'screen/favorites.php';
    break;

    case 'checkout':
        require 'screen/checkout.php';
    break;

}
#USA O REQUIRE PARA REQUERIR A TELA