<?php

include_once 'frontier/cartFrontier.php';
include_once 'frontier/purchaseFrontier.php';
include_once 'frontier/productFrontier.php';
include_once 'screen/components/cartComponents.php';

$total_price = array_sum(getPrice($conn));
$discounts = $total_price * 10/100;
$final_price = $total_price - $discounts;


?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/cartas.css">
    <title>Document</title>
</head>
<body>
    <div class="progresso-container">
        <ul class="progress-steps">
            <li class="step active"><i class="fas fa-shopping-cart"></i> Carrinho</li>
            <li class="step">———</li>
            <li class="step"><i class="fas fa-map-marker-alt"></i> Endereço</li>
            <li class="step ">———</li>
            <li class="step"><i class="far fa-credit-card"></i> Pagamento</li>
            <li class="step">———</li>
            <li class="step"><i class="far fa-check-circle"></i> Confirmação</li>
        </ul>
    </div>


    <main class="container">
        <section class="cart">
            <div class="alert">
                ⚡ Não deixe seus itens escaparem! Finalize a compra e garanta agora.
            </div>
   
            <?php foreach(getCartProducts($conn) as $id): ?>
            <?php foreach(productDetails($conn, (int)$id) as $list): ?>
            <?php products($list[1], $list[3], $list[4]) ?>
            <?php endforeach ?>
            <?php endforeach ?>

            <div class="services">
                <h4>Garantia Estendida Original Ampliada</h4>
                <form method="post" action="">
                <label><input type="radio" name="garantia"> Sem garantia</label><br>
                <label><input type="radio" name="garantia" checked> 12 Meses de Garantia Estendida EDG</label><br>
                <label><input type="radio" name="garantia"> 24 Meses de Garantia Estendida EDG</label>

            </div>
        </section>

        <?php orderSummary($total_price, $discounts, $final_price) ?>
        </form>
    </main>


    <footer>
        <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png" alt="Logo Electronic Desire Gaming rodapé" />
        <span>Todos os direitos reservados ©</span>
    </footer>
</body>
</html>

<?php 



?>