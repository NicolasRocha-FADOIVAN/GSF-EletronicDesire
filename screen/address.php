<?php

include_once 'frontier/cartFrontier.php';
include_once 'frontier/addressFrontier.php';
include_once 'frontier/purchaseFrontier.php';
include_once 'screen/components/addressComponents.php';

$total_price = array_sum(getPrice($conn));
$discounts = $total_price * 10/100;
$final_price = $total_price - $discounts;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/address.css">
    <title>Document</title>
</head>

<body>
    <div class="progresso-container">
        <ul class="progress-steps">
            <li class="step active"><i class="fas fa-shopping-cart"></i> Carrinho</li>
            <li class="step">———</li>
            <li class="step active"><i class="fas fa-map-marker-alt"></i> Endereço</li>
            <li class="step">———</li>
            <li class="step"><i class="far fa-credit-card"></i> Pagamento</li>
            <li class="step">———</li>
            <li class="step"><i class="far fa-check-circle"></i> Confirmação</li>
        </ul>
    </div>


    <div class="main-container">
        <div class="address-modal-overlay">
            <div class="address-card">
                <div class="card-header">
                    <h3>Informe o endereço para receber o pedido</h3>
                </div>

                <form method="post" class="address-form">
                    <div class="input-group full-width">
                        <input name="cep" type="text" id="cep" placeholder="CEP*" required>
                    </div>

                    <div class="input-group full-width">
                        <input name="endereco" type="text" id="endereco" placeholder="Endereço*" required>
                    </div>

                    <div class="input-row triple">
                        <div class="input-group">
                            <input name="bairro" type="text" id="bairro" placeholder="Bairro*" required>
                        </div>
                        <div class="input-group">
                            <input name="cidade" type="text" id="cidade" placeholder="Cidade*" required>
                        </div>
                        <div class="input-group">
                            <input name="estado" type="text" id="estado" placeholder="Estado*" required>
                        </div>
                    </div>

                    <div class="input-row double">
                        <div class="input-group">
                            <input name="numero_endereco" type="text" id="numero" placeholder="Número">
                        </div>
                        <div class="input-group">
                            <input name="complemento_endereco" type="text" id="complemento" placeholder="Complemento">
                        </div>
                    </div>

                    <div class="input-group full-width">
                        <input name="pontodereferencia_endereco" type="text" id="referencia" placeholder="Ponto de Referência">
                    </div>

                    <button class="btn btn-primary">SALVAR ENDEREÇO</button>
            </div>
        </div>
        <?php orderSummary($total_price, $discounts, $final_price) ?>
        </form>
    </div>

    <footer>
        <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png"
            alt="Logo Electronic Desire Gaming rodapé" />
        <span>Todos os direitos reservados 2025 ©</span>
    </footer>

</body>

</html>