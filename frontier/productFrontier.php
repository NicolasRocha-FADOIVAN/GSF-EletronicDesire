<?php

include_once 'frontier/middleman.php';

function catalog($conn) {
    $functionModel = 'catalogProduct';
    return pass($conn, $functionModel);
}

function relatedProducts($conn, $id) {
    
    $data = [

        "id_produto" => $id,

    ];

    $functionModel = 'getKeyword';
    return implodeConditions($conn, $data, $functionModel);
}

function productDetails($conn, $id) {

    $data = [

        "id_produto" => $id,

    ];

    $functionModel = 'getProductDetails';
    return implodeConditions($conn, $data, $functionModel);
}

if(isset($_POST['searchProduct'])) {
    $functionModel = 'searchProduct';
    $search = $conn->real_escape_string($_POST['searchBar']);

    header("Location: index.php?route=search&search=" . $search);
    return pass($conn, $functionModel); 
}

