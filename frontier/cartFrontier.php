<?php

include_once 'frontier/middleman.php';

function getCartProducts($conn) {

    $functionModel = 'getCart';
    return pass($conn, $functionModel);
}

if(isset($_POST['addCart'])) {

    if(in_array($_GET['idproduto'],getCartProducts($conn))) {

        $data = [

            "id_cliente" => $_SESSION['id'],
            "id_produto" => $_POST['addCart']
        ];
    
        $functionModel = 'RemoveCart';
        passData($conn, $data, $functionModel);

    } else {

        $data = [

            "id_cliente" => $_SESSION['id'],

        ];

        $functionModel = 'addCart';
        implodeConditions($conn, $data,  $functionModel);

    }

}

function getPrice($conn) {

    $functionModel = 'getCartPrices';
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
