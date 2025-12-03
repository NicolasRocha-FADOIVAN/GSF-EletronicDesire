<?php

include_once 'frontier/middleman.php';

if(isset($_POST['register'])){

    $data = [

        "nome_cliente" => $conn->real_escape_string($_POST['name']),
        "sobrenome_cliente" => $conn->real_escape_string($_POST['name']),
        "cpf_cliente" => $conn->real_escape_string($_POST['cpf']),
        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])

    ];

    $functionModel = 'register';
    
    if($data['senha_cliente'] == $_POST['confirm-password']) {
        implodeArray($conn, $data, $functionModel);
    }
}

if(isset($_POST['login'])){

    $data = [

        "email_cliente" => $conn->real_escape_string($_POST['email']),
        "senha_cliente" => $conn->real_escape_string($_POST['password'])

    ];

    $functionModel = 'login';
    implodeConditions($conn, $data, $functionModel);
}