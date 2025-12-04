<?php

include_once 'frontier/favoritesFrontier.php';
include_once 'frontier/productFrontier.php';
include_once 'screen/components/favoritesComponents.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/favoritesa.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        
        <section class="favoritos">
            <h2>Favoritos</h2>

            <?php foreach(getFavorites($conn) as $id): ?>
            <?php foreach(productDetails($conn, (int)$id) as $list): ?>
            <?php products($list[0], $list[1], $list[3], $list[4]) ?>
            <?php endforeach ?>
            <?php endforeach ?>

        </section>

    </div>
    
    <footer>
        <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png"
            alt="Logo Electronic Desire Gaming rodapé" />
        <span>Todos os direitos reservados ©</span>
    </footer>

</body>

</html>