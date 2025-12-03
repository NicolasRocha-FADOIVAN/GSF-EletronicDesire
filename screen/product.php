<?php

include_once 'frontier/productFrontier.php';
include_once 'screen/components/productComponents.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/product.css">
    <title>Produtos</title>
</head>

<body>
    <div class="container">

        <?php foreach(productDetails($conn, $_GET['idproduto']) as $list):  ?>
        <?php product($list[1], $list[2],$list[3], $list[4]) ?>
        <?php endforeach ?>

        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>PRODUTOS RELACIONADOS</b></p>
            </div>
        </div>
         <div class="produtos-card-container">

            <?php foreach(relatedProducts($conn, $_GET['idproduto']) as $list):  ?>
            <?php related($list[0], $list[1],$list[3], $list[4]) ?>
            <?php endforeach ?>

        </div>

        <footer>
            <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png"
                alt="Logo Electronic Desire Gaming rodapé" />
            <span>Todos os direitos reservados ©</span>
        </footer>
</body>

</html>