<?php

include_once 'config.php';
function getCart($conn) {

    $id = $_SESSION['id'];

    if(isset($id)) {

        $sql_code = "SELECT produtos_carrinho FROM carrinhos WHERE id_cliente = '$id'";
        $result = $conn->query($sql_code);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $list = json_decode($row['produtos_carrinho']);
            return (array) $list;

        } else {
            $sql_code = "INSERT INTO carrinhos (id_cliente) VALUES ('$id')";
            $result = $conn->query($sql_code);
        }
    }

}

function addCart($conn, $conditions) {

    $id = $_GET['idproduto'];

    $list = getCart($conn);
    $list[] = $id;

    $json = json_encode($list);

    $sql_code = "UPDATE carrinhos SET produtos_carrinho = '$json' WHERE $conditions[0]";

    $result = $conn->query($sql_code);
    
}