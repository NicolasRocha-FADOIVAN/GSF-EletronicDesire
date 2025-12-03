<?php

include_once 'frontier/middleman.php';

function getCartProducts($conn) {

    $functionModel = 'getCart';
    return pass($conn, $functionModel);
}

if(isset($_POST['addCart'])) {

    $data = [

        "id_cliente" => $_SESSION['id'],

    ];

    $functionModel = 'addCart';
    implodeConditions($conn, $data,  $functionModel);
}
