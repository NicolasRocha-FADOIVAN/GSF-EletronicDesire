<?php 

function products($product_name, $product_price, $product_image) {

    $pix_price = number_format($product_price - $product_price/25, 2, ',', '.');
    $economy = number_format( $product_price/25, 2, ',', '.');
    $product_price = number_format($product_price, 2, ',', '.');

    $element="
        <main class='container'>
            <section class='cart'>
                <div class='product-box'>
                    <div class='product-info'>
                        <img src=$product_image
                            alt='imagem do produto' />
                        <div>
                            <h3>$product_name</h3>
                            <p>Com desconto no PIX: <strong>R$ $pix_price</strong></p>
                            <p>Parcelado sem juros: R$ $product_price</p>
                        </div>
                    </div>
                    <div class='quantity'>
                        <button>-</button>
                        <input type='text' value='1' readonly>
                        <button>+</button>
                    </div>
                </div>

                <div class='services'>
                    <h4>Garantia Estendida Original Ampliada</h4>
                    <label><input type='radio' name='garantia'> Sem garantia</label><br>
                    <label><input type='radio' name='garantia' checked> 12 Meses de Garantia Estendida Kabum</label><br>
                    <label><input type='radio' name='garantia'> 24 Meses de Garantia Estendida Kabum</label>
                </div>
            </section>

            <aside class='summary'>
                <h3>Resumo</h3>
                <p><strong>Valor do Produto:</strong>R$ 3.899,00</p>
                <p><strong>Serviços Adicionais:</strong> R$ 0,00</p>
                <hr>
                <p><strong>Total a prazo:</strong> R$ $product_price</p>
                <p class='pix'><strong>Valor à vista no PIX:</strong> $pix_price</p>
                <p class='economy'>(Economize: R$ $economy)</p>

                <button class='continue'>CONTINUAR</button>
                <button class='back'>VOLTAR</button>
            </aside>

        </main>
    ";

    echo $element;

}