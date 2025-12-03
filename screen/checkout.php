<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/checkout.css">
    <title>Document</title>
</head>
<body>

    <div class="progresso-container">
        <ul class="progress-steps">
            <li class="step"><i class="fas fa-shopping-cart"></i> Carrinho</li>
            <li class="step">———</li>
            <li class="step"><i class="fas fa-map-marker-alt"></i> Endereço</li>
            <li class="step">———</li>
            <li class="step"><i class="fas fa-truck"></i> Entrega</li>
            <li class="step">———</li>
            <li class="step active"><i class="far fa-credit-card"></i> Pagamento</li>
            <li class="step">———</li>
            <li class="step"><i class="far fa-check-circle"></i> Confirmação</li>
        </ul>
    </div>

    <div class="container">
        <section class="payment-section">
            <h2><i class="far fa-eye"></i> FORMA DE PAGAMENTO</h2>

            <div class="payment-option selected">
                <div class="option-header">
                    <div class="radio-label">
                        <div class="custom-radio"></div>
                        <span>PIX</span>
                    </div>
                    <i class="fas fa-qrcode pix-icon"></i>
                </div>
                <div class="option-details">
                    Até <strong>22% de desconto</strong> com <strong>aprovação imediata</strong> que torna a <strong>expedição mais rápida</strong> do pedido.
                </div>
            </div>

            <div class="payment-option">
                <div class="option-header">
                    <div class="radio-label">
                        <div class="custom-radio"></div>
                        <span>CARTÃO DE CRÉDITO</span>
                    </div>
                    <i class="far fa-credit-card card-icon"></i>
                </div>
            </div>

            <div class="payment-option">
                <div class="option-header">
                    <div class="radio-label">
                        <div class="custom-radio"></div>
                        <span>NUPAY</span>
                    </div>
                    <i class="fab fa-cc-mastercard card-icon" style="color: purple;"></i>
                </div>
            </div>
        </section>

        <aside class="order-summary">
            <div class="summary-box">
                <div class="summary-header">
                    <i class="fas fa-file-invoice-dollar"></i> RESUMO
                </div>

                <div class="summary-row">
                    <span>Valor dos Produtos:</span>
                    <strong>R$ 2.999,00</strong>
                </div>

                <div class="summary-row discount">
                    <span>Descontos:</span>
                    <strong>- R$ 209,93</strong>
                </div>

                <div class="summary-row">
                    <span>Frete:</span>
                    <strong>R$ 38,25</strong>
                </div>

                <div class="total-box">
                    <div class="total-label">
                        <span>Valor à vista no <strong>PIX:</strong></span>
                        <span style="font-size: 10px; opacity: 0.8;">(Economize: <strong>R$ 209,93</strong>)</span>
                    </div>
                    <div class="total-price">R$ 2.827,32</div>
                </div>

                <button class="btn btn-primary">CONTINUAR</button>
                <button class="btn btn-outline">VOLTAR</button>
            </div>
        </aside>
    </div>

    <footer>
        <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="screen/assets/EDG.png"
            alt="Logo Electronic Desire Gaming rodapé" />
        <span>Todos os direitos reservados 2025 ©</span>
    </footer>

</body>
</html>