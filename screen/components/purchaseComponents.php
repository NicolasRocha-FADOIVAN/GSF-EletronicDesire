<?php

function orderSummary($total_price, $discounts, $final_price) {

    $total_price = number_format($total_price, 2, ',', '.');
    $discounts = number_format($discounts, 2, ',', '.');
    $final_price = number_format($final_price, 2, ',', '.');

    $element="

        <aside class='order-summary'>
            <div class='summary-box'>
                <div class='summary-header'>
                    <i class='fas fa-file-invoice-dollar'></i> RESUMO
                </div>

                <div class='summary-row'>
                    <span>Valor dos Produtos:</span>
                    <strong>R$ $total_price</strong>
                </div>

                <div class='summary-row discount'>
                    <span>Descontos:</span>
                    <strong>- R$ $discounts</strong>
                </div>

                <div class='total-box'>
                    <div class='total-label'>
                        <span>Valor à vista no <strong>PIX:</strong></span>
                    </div>
                    <div class='total-price'>R$ $final_price</div>
                </div>
                <button name='finish' class='btn btn-primary' type='submit'>CONTINUAR</button>
                <button name='voltar' class='btn btn-outline' type='submit'>VOLTAR</button>
            </div>
        </aside>

    ";

    echo $element;
}