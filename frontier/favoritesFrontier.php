<?php

include_once 'frontier/middleman.php';

function getFavoriteProducts($conn) {

    $functionModel = 'getFavorites';
    return pass($conn, $functionModel);
}

if(isset($_POST['addFavorites'])) {

    $data = [

        "id_cliente" => $_SESSION['id'],

    ];

    $functionModel = 'addFavorites';
    implodeConditions($conn, $data,  $functionModel);
}

function getFavPrice($conn) {

    $functionModel = 'getFavoritePrices';
    return pass($conn, $functionModel);

}

if(isset($_POST['removeFavorites'])) {

    $data = [

        "id_cliente" => $_SESSION['id'],
        "id_produto" => $_POST['removeFavorites']
    ];

    $functionModel = 'removeFavorites';
    passData($conn, $data,  $functionModel);
}
