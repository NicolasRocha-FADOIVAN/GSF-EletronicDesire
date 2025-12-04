<?php

include 'gate/clienteGate.php';
include 'gate/produtoGate.php';
include 'gate/carrinhoGate.php';
include 'gate/enderecoGate.php';
include 'gate/comprasGate.php';
include 'gate/favoritoGate.php';

#USADO PARA FUNÇÕES CREATE
function implodeArray($conn, $data, $functionModel) {

    $dataKeys = array_keys($data);
    $dataValues = array_values($data);

    $columns = implode(", ", $dataKeys);
    $rows = "'" . implode("', '", $dataValues) . "'";

    return $functionModel($conn, $columns, $rows);

}

#USADO PARA CLAUSURAS WHERE
function implodeConditions($conn, $data, $functionModel) {

    $conditions = [];

    foreach ($data as $column => $row):
        $conditions[] = $column . " = " . "'$row'";
    endforeach;

    return $functionModel($conn, $conditions);
    
}

#USADO PARA FUNÇÕES UPDATE
function implodeValues($conn, $data, $functionModel) {
    
    $valuesArray = [];

    foreach ($data as $column => $row):
        $valuesArray[] = $column . " = " . "'$row'";
    endforeach;

    $values = implode(", ", $valuesArray);
    return $functionModel($conn, $values);

}

#USADO PARA FUNÇÕES UPDATE COM CLAUSURAS WHERE
function implodeConValues($conn, $dataValues, $dataConditions, $functionModel) {

    $conditions = [];
    $valuesArray = [];

    foreach ($dataValues as $column => $row):
        $valuesArray[] = $column . " = " . "'$row'";
    endforeach;

    foreach ($dataConditions as $column => $row):
        $conditions[] = $column . " = " . "'$row'";
    endforeach;

    $values = implode(", ", $valuesArray);
    return $functionModel($conn, $values, $conditions);

}

function pass($conn, $functionModel) {

    return $functionModel($conn);

}

function passData($conn, $data, $functionModel) {

    return $functionModel($conn, $data);

}