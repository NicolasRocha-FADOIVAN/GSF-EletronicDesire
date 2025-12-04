<?php

include_once 'config.php';

function getCart($conn) {

    $id = $_SESSION['id'];

    if(isset($id)) {

        $sql_code = "SELECT produtos_carrinho FROM carrinhos WHERE id_cliente = '$id'";
        $result = $conn->query($sql_code);

        if($result->num_rows > 0 && $result->fetch_assoc()['produtos_carrinho'] != Null) {
            $row = $result->fetch_assoc();
            $list = json_decode($row['produtos_carrinho']);
            return (array) $list;

        } else {
            $sql_code = "INSERT INTO carrinhos (id_cliente) VALUES ('$id')";
            $result = $conn->query($sql_code);
            return [];
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
    
    header("Location: index.php?route=cart");
}

function getCartPrices($conn) {

    $list = getCart($conn);

        if($list != Null) {
        $priceList = [];

        foreach($list as $id) {
            $sql_code = "SELECT preco_produto FROM produtos WHERE id_produto = '$id'";
            $result = $conn->query($sql_code);
            $priceList[] = (float) $result->fetch_all()[0][0];
        }

        return $priceList;
    } else {
        return [];
    }
}

function RemoveCart ($conn, $data) {
    
    $id = $data['id_cliente'];
    $id_produto = $data['id_produto'];

    $list = getFavorites($conn);
    $list = array_diff($list, [$id_produto]);

    $json = json_encode($list);

    $sql_code = "UPDATE carrinhos SET produtos_carrinho = '$json' WHERE id_cliente = '$id'";

    $result = $conn->query($sql_code);
}