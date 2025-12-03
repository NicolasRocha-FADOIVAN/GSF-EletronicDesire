<?php

include 'config.php';

function register($conn, $columns, $rows) {

    #CRIA UM CÓDIGO SQL PARA INSERIR OS VALORES NA TABELA DE USUARIOS

    $sql_code = "INSERT INTO clientes ($columns) VALUES ($rows)";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A TELA DE LOGIN
    header("Location: index.php?route=login");
}

function login($conn, $conditions) {



    #CRIA UM CÓDIGO SQL PARA SELECIONAR OS VALORES DO USUÁRIO, VERIFICANDO SE OS VALORES DAS VARIAVEIS EXISTEM NO BANCO DE DADOS
    $sql_code = "SELECT * FROM clientes WHERE $conditions[0] AND $conditions[1]";
    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    if($result->num_rows == 1) {

        #PEGA OS DADOS DO USUÁRIO
        $user = $result->fetch_assoc();
       
        #ARMAZENA O ID E NOME DO USUÁRIO NA SUPERGLOBAL SESSION
        $_SESSION['id'] = $user['id_cliente'];

        #REDIRECIONA PARA A TELA PRINCIPAL
        header("Location: index.php?route=home");
    }
}
