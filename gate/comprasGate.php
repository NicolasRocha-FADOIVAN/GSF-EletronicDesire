<?php

include 'config.php';


function getPurchase($conn, $id) {

    if(isset($id)) {

        $sql_code = "SELECT produtos_compra FROM compras WHERE id_cliente = '$id' AND status_compra = 0";
        $result = $conn->query($sql_code);

        if($result->num_rows < 1) {

            $sql_code = "INSERT INTO compras (id_cliente) VALUES ('$id')";
            $result = $conn->query($sql_code);
        }
    }

}

function addProductsPurchase($conn, $data) {

   $id = $_SESSION['id'];

   getPurchase($conn, $data[0]);

   $json = json_encode($data[1]);

   $sql_code = "UPDATE compras SET produtos_compra = '$json', preco_compra = '$data[2]' WHERE id_cliente = '$id' AND status_compra = 0";
   $result = $conn->query($sql_code);

   header("Location: index.php?route=address");
}

function addAddressPurchase($conn, $data) {

    $id_endereco = $data['id_endereco'];
    $id = $_SESSION['id'];

    $sql_code = "UPDATE compras SET id_endereco = '$id_endereco' WHERE id_cliente = '$id' AND status_compra = 0";
    $result = $conn->query($sql_code);
 
    header("Location: index.php?route=purchase");
    
 }

 function finishPurchase($conn, $data) {

    $id = $_SESSION['id'];
    $payment= $data['met_pagamento'];

    $sql_code = "UPDATE compras SET met_pagamento = '$payment', status_compra = 1  WHERE id_cliente = '$id' AND status_compra = 0";
    $result = $conn->query($sql_code);

    $sql_code = "DELETE FROM carrinhos WHERE id_cliente = '$id'";
    $result = $conn->query($sql_code);
 
    header("Location: index.php?route=checkout");
    
 }

 function cancelPurchase($conn) {
    $id = $_SESSION['id'];

    $sql_code = "DELETE FROM compras WHERE id_cliente = '$id' AND status_compra = 0";
    $result = $conn->query($sql_code);

    header("Location: index.php?route=home"); 
 }