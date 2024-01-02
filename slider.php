<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<style>
  .branco {
    color: white !important;
  }
</style>

<body>
  <div class="slider" data-aos="fade-up">
    <div class="section-title branco" data-aos="fade-up">
      <h2 style="color: white;">FROTA NOVA
      </h2>
      <p>
        Com uma frota moderna e manutenção em dia, garantimos trajetos seguros e eficientes, conduzindo seu sucesso com excelência </p>
    </div>
    <style>
      .swiperCuboStilo {
        margin-top: 60px;
        width: 700px;
        height: 500px;
        align-items: center;
        justify-content: center;
      }

      .swiperCuboStilo img {
        object-fit: cover;
      }

      @media only screen and (max-width: 600px) {
        .swiperCuboStilo {
          margin-top: 60px;
          width: 80vw;
          height: 300px;
          align-items: center;
          justify-content: center;
        }

        
      .swiperCuboStilo img {
        object-fit: cover;
      }
      }
    </style>
    <div class="swiper mySwiperCube swiperCuboStilo" data-aos="fade-up">
      <div class="swiper-wrapper">

        <?php
        // Caminho para a pasta das imagens
        $caminho_pasta = 'assets/img/frota';

        // Obtém a lista de arquivos na pasta
        $arquivos = scandir($caminho_pasta);

        // Itera sobre os arquivos
        foreach ($arquivos as $arquivo) {
          // Verifica se o arquivo é uma imagem (pode adicionar mais extensões, se necessário)
          $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
          $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
          if (in_array(strtolower($extensao), $extensoes_permitidas)) {
            // Exibe a imagem dentro de um swiper-slide
            echo '<div class="swiper-slide">';
            echo '<img src="' . $caminho_pasta . '/' . $arquivo . '" />';
            echo '</div>';
          }
        }
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <script>
    var swiper = new Swiper(".mySwiperCube", {
      effect: "cube",
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop: true,
    });
  </script>
</body>

<script src="slider.js"></script>

</html> -->