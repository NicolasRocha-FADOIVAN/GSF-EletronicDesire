<?php

include_once 'config.php';

function useAddress($conn, $columns, $rows) {

    #CRIA UM CÓDIGO SQL PARA INSERIR OS VALORES NA TABELA DE USUARIOS

    $sql_code = "INSERT INTO enderecos ($columns) VALUES ($rows)";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

}

function getAddressId($conn, $conditions) {

    #CRIA UM CÓDIGO SQL PARA INSERIR OS VALORES NA TABELA DE USUARIOS

    $where = implode(" AND ", $conditions);

    $sql_code = "SELECT id_endereco FROM enderecos WHERE $where";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    return $result->fetch_all();

}
function getAddress($conn, $conditions) {

    #CRIA UM CÓDIGO SQL PARA INSERIR OS VALORES NA TABELA DE USUARIOS

    $where = implode(" AND ", $conditions);

    $sql_code = "SELECT * FROM enderecos WHERE $where";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    return $result->num_rows;

}
