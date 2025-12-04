<?php

include_once 'config.php';

function getFavorites($conn) {

    $id = $_SESSION['id'];

    if(isset($id)) {

        $sql_code = "SELECT produtos_favoritos FROM favoritos WHERE id_cliente = '$id'";
        $result = $conn->query($sql_code);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $list = json_decode($row['produtos_favoritos']);
            return (array) $list;

        } else {
            $sql_code = "INSERT INTO favoritos (id_cliente) VALUES ('$id')";
            $result = $conn->query($sql_code);
        }
    }

}

function addFavorites($conn, $conditions) {

    $id = $_GET['idproduto'];

    $list = getFavorites($conn);
    $list[] = $id;

    $json = json_encode($list);

    $sql_code = "UPDATE favoritos SET produtos_favoritos = '$json' WHERE $conditions[0]";

    $result = $conn->query($sql_code);

    header("Location: index.php?route=favorites");
    
}

function getFavoritePrices($conn) {

    $list = getFavorites($conn);
    $priceList = [];

    foreach($list as $id) {
        $sql_code = "SELECT preco_produto FROM produtos WHERE id_produto = '$id'";
        $result = $conn->query($sql_code);
        $priceList[] = (float) $result->fetch_all()[0][0];
    }

    return $priceList;
    
}

function RemoveFavorites($conn, $data) {

    $id = $data['id_cliente'];
    $id_produto = $data['id_produto'];

    $list = getFavorites($conn);
    $list = array_diff($list, [$id_produto]);

    $json = json_encode($list);

    $sql_code = "UPDATE favoritos SET produtos_favoritos = '$json' WHERE id_cliente = '$id'";

    $result = $conn->query($sql_code);
    
}