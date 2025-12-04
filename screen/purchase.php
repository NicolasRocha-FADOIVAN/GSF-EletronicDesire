<?php

include_once 'frontier/cartFrontier.php';
include_once 'frontier/purchaseFrontier.php';
include_once 'screen/components/purchaseComponents.php';

$total_price = array_sum(getPrice($conn));
$discounts = $total_price * 10/100;
$final_price = $total_price - $discounts;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/purchase.css">
    <title>Document</title>
</head>

<body>

    <div class="progresso-container">
        <ul class="progress-steps">
            <li class="step active"><i class="fas fa-shopping-cart"></i> Carrinho</li>
            <li class="step">———</li>
            <li class="step active"><i class="fas fa-map-marker-alt"></i> Endereço</li>
            <li class="step ">———</li>
            <li class="step active"><i class="far fa-credit-card"></i> Pagamento</li>
            <li class="step">———</li>
            <li class="step"><i class="far fa-check-circle"></i> Confirmação</li>
        </ul>
    </div>
    
    <form method="post">
        <div class="main-container">
            <div class="payment-methods">

                <label class="payment-option">
                    <input type="radio" name="payment" value="pix" checked/>
                    <div class="payment-info">
                        <strong>PIX</strong>
                        <span>Até 22% de desconto com aprovação imediata.</span>
                    </div>
                </label>

                <label class="payment-option">
                    <input type="radio" name="payment" value="credit"/>
                    <div class="payment-info">
                        <strong>Cartão de Crédito</strong>
                        <span>Parcelamento em até 12x conforme regras da loja.</span>
                    </div>
                </label>

                <label class="payment-option">
                    <input type="radio" name="payment" value="nupay"/>
                    <div class="payment-info">
                        <strong>Nupay</strong>
                        <span>Pague com Nupay com condições especiais.</span>
                    </div>
                </label>

            </div>

            <script>
                const options = document.querySelectorAll(".payment-option");

                options.forEach(option => {
                    option.addEventListener("click", () => {

                        options.forEach(o => o.classList.remove("selected"));

                        option.classList.add("selected");
                    });
                });
            </script>

            <?php orderSummary($total_price, $discounts, $final_price) ?>
        </div>
    </form>

    <footer>
        <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png"
            alt="Logo Electronic Desire Gaming rodapé" />
        <span>Todos os direitos reservados 2025 ©</span>
    </footer>

</body>

</html>