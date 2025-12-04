<?php 

function products($id_produto, $product_name, $product_price, $product_image) {

    $pix_price = number_format($product_price - $product_price/25, 2, ',', '.');
    $product_price = number_format($product_price, 2, ',', '.');

    $element="

        <div class='card'>
            <img src=$product_image
                alt='Placa de Vídeo'>

            <div class='info'>
                <h3>$product_name</h3>
                <div class='rating'>★★★★★ (27)</div>
            </div>

            <div class='price'>
                <s>R$ $product_price</s>
                <strong>R$ $pix_price</strong>
                <p>à vista no Pix</p>
                <a href='index.php?route=product&idproduto=$id_produto'><button class='btn-comprar'><b>Comprar</b></button></a>
            </div>
            <form method='post'>
                <button name='removeFavorites' value=$id_produto class='heart'>❤️</button>
            </form>
        </div>
    ";

    echo $element;

}
