<?php 

function product($product_name, $product_description, $product_price, $product_image) {

    $price_10x = number_format($product_price/10, 2, ',', '.');
    $prime_price = number_format($product_price - $product_price/8.8, 2, ',', '.');
    $product_price = number_format($product_price, 2, ',', '.');

    $element="
        <div class='produto-container'>
            <div class='left'>
                <img src=$product_image alt='magem do produto' class='produto-imagem'>
            </div>

            <div class='right'>
                <div class='produto-detalhes'>
                    <h2>
                    $product_name
                    </h2>

                    <p class='avaliacoes'>★★★★★ (1)</p>

                    <button class='botao-sobre'><b>SOBRE O PRODUTO</b></button>

                    <ul class='descricao'>
                        $product_description
                    </ul>

                    <p class='preco'><b>R$ $product_price</b></p>
                    <p class='parcelamento'><b>ou em até 10x de R$ $price_10x</b></p>

                    <form method='POST'>
                        <button class='botao-prime'>ASSINE PRIME EDG E PAGUE $prime_price</button>
                        <button class='botao-comprar'>COMPRAR AGORA</button>
                        <button class='botao-carrinho' type='submit' name='addCart'>ADICIONAR AO CARRINHO</button>
                    </form>
                    
                    <div class='cep-container'>
                        <input type='text' placeholder='Inserir CEP'>
                        <button>OK</button>
                    </div>
                </div>
            </div>
        </div>
    ";

    echo $element;
}

function related($id_product, $product_name, $product_price, $product_image) {

    $product_price = number_format($product_price, 2, ',', '.');

    $element="
        <div class='produtos'>
            <img src=$product_image
                class='image-produtos' alt='imagem do produto' />
            <p class='paragrafo'><b>$product_name</b></p>                
            <p class='preço'><b>R$ $product_price</b></p>
        <a href='index.php?route=product&idproduto=$id_product'> <button class='botao'>Comprar</button> </a>
        </div>
    ";

    echo $element;
}