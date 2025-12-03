<?php

function catalogProduct($conn) {
    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS DA TABELA EM UMA ORDEM ALEATÓRIA
    $sql_code = "SELECT * FROM produtos ORDER BY RAND() LIMIT 5";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    return queryProduct($result);
}

function searchProduct($conn) {
    #RECEBE O VALOR DIGITADO NA BARRA DE PESQUISA E COLOCA ELE EM UMA VARIÁVEL
    $search = $_GET['search'];

    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS NA QUAL O VARIÁVEL ESTÁ PRESENTE
    $sql_code = "SELECT * FROM produtos WHERE nome_produto LIKE '%$search%'";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #CHAMA A FUNÇÃO QUERY PRODUCT COM O PARAMETRO RESULT
    // queryProduct($result);
    return queryProduct($result);
}

function getKeyword($conn, $conditions) {
    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS NA QUAL O VARIÁVEL ESTÁ PRESENTE
    $sql_code = "SELECT palavra_chave FROM produtos WHERE $conditions[0]";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #CHAMA A FUNÇÃO QUERY PRODUCT COM O PARAMETRO RESULT
    // queryProduct($result);
    return getRelatedProducts($conn, $result->fetch_all()[0][0], $conditions);
}

function getRelatedProducts($conn, $keyword, $conditions) {
    #RECEBE O VALOR DIGITADO NA BARRA DE PESQUISA E COLOCA ELE EM UMA VARIÁVEL

    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS NA QUAL O VARIÁVEL ESTÁ PRESENTE
    $sql_code = "SELECT * FROM produtos WHERE nome_produto LIKE '%$keyword%' AND NOT $conditions[0]";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #CHAMA A FUNÇÃO QUERY PRODUCT COM O PARAMETRO RESULT
    // queryProduct($result);
    return queryProduct($result);
}


function queryProduct($result) {

    #RETORNA UM ARRAY COM AS INFORMAÇÕES DO RESULTADO
    if($result->num_rows > 0) {

        #CHAMA A FUNÇÃO QUERY PRODUCT COM O PARAMETRO RESULT
        // queryProduct($result);
        $list = $result->fetch_all(MYSQLI_NUM);
        return $list;
    }

    return [];
}

function getProductDetails($conn, $conditions) {
    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS DA TABELA EM UMA ORDEM ALEATÓRIA
    $sql_code = "SELECT * FROM produtos WHERE $conditions[0]";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    if($result->num_rows == 1) {

        return $result->fetch_all();

    }
}