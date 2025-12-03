<?php 

function products($id_product, $product_name, $product_price, $product_image) {

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