<?php 

function products($id_product, $product_name, $product_price, $product_image) {

    $element="
    <div class='produto-card'>
        <img src=$product_image alt='imagem do produto'>
        <p class='descricao'>
            <b>
                $product_name
            </b>
        </p>
        <p class='preco'>R$ $product_price</p>
        <a href='index.php?route=product&idproduto=$id_product'> <button class='botao-comprar'>Comprar</button> </a>
    </div> 
    ";

    echo $element;
}