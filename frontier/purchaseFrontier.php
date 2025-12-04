<?php

include_once 'frontier/middleman.php';
include_once 'frontier/cartFrontier.php';
include_once 'frontier/addressFrontier.php';

if(isset($_POST['continue'])){

    $total_price = array_sum(getPrice($conn));
    $discounts = $total_price * 10/100;
    $final_price = $total_price - $discounts;

    $data = [

        $_SESSION['id'],
        getCart($conn),
        $final_price

    ];

    $functionModel = 'addProductsPurchase';
    
    passData($conn, $data, $functionModel);

}

if(isset($_POST['useAddress'])){

    $data = [

        "cep" => $conn->real_escape_string($_POST['cep']),
        "endereco" => $conn->real_escape_string($_POST['endereco']),
        "bairro" => $conn->real_escape_string($_POST['bairro']),
        "cidade" => $conn->real_escape_string($_POST['cidade']),
        "estado" => $conn->real_escape_string($_POST['estado']),
        "numero_endereco" => $conn->real_escape_string($_POST['numero_endereco']),
        "complemento_endereco" => $conn->real_escape_string($_POST['complemento_endereco']),
        "pontodereferencia_endereco" => $conn->real_escape_string($_POST['pontodereferencia_endereco']),
        "id_cliente" => $_SESSION['id']

    ];

    $functionModel = 'addAddressPurchase';
    
    $id = idAddress($conn, $data);

    $data = [

        "id_endereco" => $id,

    ];

    passData($conn, $data, $functionModel);

}

if(isset($_POST['finish'])){

    $data = [

        "met_pagamento" => $conn->real_escape_string($_POST['payment']),
        "id_cliente" => $_SESSION['id']

    ];

    $functionModel = 'finishPurchase';

    passData($conn, $data, $functionModel);

}

if(isset($_POST['voltar'])){

    $functionModel = 'cancelPurchase';

    pass($conn, $functionModel);

}