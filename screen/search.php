<?php

include_once 'frontier/productFrontier.php';
include_once 'screen/components/searchComponents.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/search.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <main>
        </div>
            <div class="produtos-container">
            <?php foreach(searchProduct($conn) as $list): ?>
            <?php products($list[0], $list[1], $list[3], $list[4]) ?>
            <?php endforeach ?>
        </div>
    </main>

    <footer>
        <img style="object-fit: contain; width: 250px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png" alt="Logo Electronic Desire Gaming rodapé" />
        <span>Todos os direitos reservados ©</span>   
    </footer>
</body>
</html>