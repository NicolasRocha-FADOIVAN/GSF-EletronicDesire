<?php

include_once 'frontier/middleman.php';

if(isset($_POST['useAddress'])) {

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

    $functionModel = 'getAddress';
    if (implodeConditions($conn, $data, $functionModel) <= 0) {
            
        $functionModel = 'useAddress';
        implodeArray($conn, $data, $functionModel);
    }
}

function idAddress($conn, $data) {

    $functionModel = 'getAddressId';
    
    return implodeConditions($conn, $data, $functionModel)[0][0];

}


