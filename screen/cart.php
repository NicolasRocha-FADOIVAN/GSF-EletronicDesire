<?php

include_once 'frontier/cartFrontier.php';
include_once 'frontier/productFrontier.php';
include_once 'screen/components/cartComponents.php';

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/cart.css">
    <title>Document</title>
</head>
<body>
    <div class="alert">
        ⚡ Não deixe seus itens escaparem! Finalize a compra e garanta agora.
    </div>
   
    <?php foreach(getCartProducts($conn) as $id): ?>
    <?php foreach(productDetails($conn, (int)$id) as $list): ?>
    <?php products($list[1], $list[3], $list[4]) ?>
    <?php endforeach ?>
    <?php endforeach ?>

    <footer>
        <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png" alt="Logo Electronic Desire Gaming rodapé" />
        <span>Todos os direitos reservados ©</span>
    </footer>
</body>
</html>