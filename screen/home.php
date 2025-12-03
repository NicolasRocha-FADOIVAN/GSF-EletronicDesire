<?php

include_once 'frontier/productFrontier.php';
include_once 'screen/components/homeComponents.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/home.css" />
    <title>Electronic Desire Gaming</title>
</head>

<body>
    
    <div class="container">

        <div id="banner">
            <img src="./screen/assets/Banner.jpg" alt="Banner promocional Friday Black - Compre aqui!" />
        </div>
    
        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>ESQUENTA BLACK🖤</b></p>
            </div>
        </div>

        <div class="produtos-card-container">

            <?php foreach(catalog($conn) as $list):  ?>
            <?php products($list[0],$list[1], $list[3], $list[4]) ?>
            <?php endforeach ?>
            
        </div>

        <div class="titulo-cards-container">
            <div class="titulo-marcas">
                <p><b>MARCAS RECOMENDADAS</b></p>
            </div>
        </div>
    
        <div class="marcas-cards-wrapper">
           <div class="marcas-cards-container">
                <button class="seta esquerda" onclick="mover(-1)"> &#8249;</button>
                <div class="marcas-contant" id="carrossel">
                    <div class="card banner-1"><img src="./screen/assets/marcas-recomendadas/logitech-logo.jpg" class="marcas-image" alt="Banner Marca 1" /></div>
                    <div class="card banner-2"><img src="./screen/assets/marcas-recomendadas/hyperx-logo.jpg" class="marcas-image" alt="Banner Marca 2" /></div>
                    <div class="card banner-3"><img src="./screen/assets/marcas-recomendadas/dell-logo.jpg" class="marcas-image" alt="Banner Marca 3" /></div>
                    <div class="card banner-4"><img src="./screen/assets/marcas-recomendadas/intel-logo.jpg" class="marcas-image" alt="Banner Marca 4" /></div>
                    <div class="card banner-5"><img src="./screen/assets/marcas-recomendadas/corsair-logo.jpg" class="marcas-image" alt="Banner Marca 5" /></div>
                    <div class="card banner-6"><img src="./screen/assets/marcas-recomendadas/kingston-logo.jpg" class="marcas-image" alt="Banner Marca 6" /></div>
                    <div class="card banner-7"><img src="./screen/assets/marcas-recomendadas/logitech-logo.jpg" class="marcas-image" alt="Banner Marca 7" /></div>
                </div>
                <button class="seta direita" onclick="mover(1)">&#8250;</button>
           </div>
        </div>

        <script>
          let posicao = 0;
          const carrossel = document.getElementById("carrossel");
          const card = carrossel.querySelector(".card");
          const itemLargura = card.offsetWidth + 20; 
          let visibleWidth = document.querySelector(".marcas-cards-container").offsetWidth;

          function mover(direcao) {
            posicao += direcao * itemLargura;
            const maxPosicao = (carrossel.children.length * itemLargura - visibleWidth);
            const minPosicao = -(carrossel.children.length * itemLargura - visibleWidth);
            if (posicao > maxPosicao) posicao = maxPosicao;
            if (posicao < minPosicao) posicao = minPosicao;
            carrossel.style.transform = `translateX(${posicao}px)`;
          }

          window.addEventListener("resize", () => {
            visibleWidth = document.querySelector(".marcas-cards-container").offsetWidth;
          });
        </script>

        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>MAIS PROCURADOS</b></p>
            </div>
        </div>
        
        <div class="produtos-card-container">
            <?php foreach(catalog($conn) as $list):  ?>
            <?php products($list[0],$list[1], $list[3], $list[4]) ?>
            <?php endforeach ?>
        </div>

        <div class="titulo-produtos-container">
            <div class="titulo-produtos">
                <p><b>LINKS RELACIONADOS</b></p>
            </div>
        </div>
        <div class="produtos-links-container">
            <a href="#">rtx 5090</a>
            <a href="#">galaxy s25</a>
            <a href="#">rtx 5070</a>
            <a href="#">rtx 5080</a>
            <a href="#">iphone 15</a>
            <a href="#">iphone 16</a>
            <a href="#">iphone 17</a>
            <a href="#">notebooks</a>
            <a href="#">xbox</a>
            <a href="#">playstation 5</a>
            <a href="#">nintendo switch 2</a>
            <a href="#">apple watch</a>
            <a href="#">pc gamer</a>
            <a href="#">monitor</a>
            <a href="#">samsung s24</a>
            <a href="#">notebook gamer</a>
            <a href="#">rtx 4060 ti</a>
        </div>

        <footer>
            <img style="object-fit: contain; width: 150px; cursor: pointer;" id="logo" src="./screen/assets/EDG.png" alt="Logo Electronic Desire Gaming rodapé" />
            <span>Todos os direitos reservados ©</span>
        </footer>    

    </div>

</body>
</html>
