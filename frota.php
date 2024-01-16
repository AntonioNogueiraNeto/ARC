<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</head>
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-slide {
        width: 80%;
    }




    .swiperFrota {
        width: 80%;
        height: 80%;
    }


    .swiperSlideFrota img {
        width: 100%;
        object-fit: cover !important;

    }


    .fronta-box {
        height: 600px;
    }


    @media only screen and (max-width: 600px) {

        /* caixa de limitacao */
        .fronta-box {
            width: 100%;
            height: 400px;
        }

        .swiper-wrapper {
            width: 100%;
        }

        .swiperSlideFrota {
            width: 100%;
        }

        .swiperSlideFrota img {
            width: 100vw;
        }


        .swiperCuboStilo {
            margin-top: 60px;
            width: 80vw;
            height: 300px;
            align-items: center;
            justify-content: center;
        }





    }
</style>

<body>
    <div class="servicesbg">
        <div class="container" id="portfolio">
            <div class="section-title" data-aos="fade-up">
                <h2>Frotas</h2>
            </div>
            <div class="fronta-box">
                <div class="swiper mySwiper swiperFrota">
                    <div class="swiper-wrapper">
                        <?php
                        $caminho_pasta = 'assets/img/galeria';
                        $arquivos = scandir($caminho_pasta);
                        // Remova . e ..
                        $arquivos = array_diff($arquivos, array('..', '.'));

                        // Ordenar os arquivos
                        natsort($arquivos);

                        foreach ($arquivos as $arquivo) {
                            $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif', 'jfif'];
                            $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);

                            if (in_array(strtolower($extensao), $extensoes_permitidas)) {
                                echo '<div class="swiper-slide swiperSlideFrota">';
                                echo '<img class="frota-imagem-slide" src="' . $caminho_pasta . '/' . $arquivo . '" />';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                    <!-- Adiciona botões de navegação -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: "auto",
                spaceBetween: 30,
          
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: true,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                centeredSlides: true,
                speed: 3000,
                effect: "slide",
            });

            // Adiciona ouvintes de eventos para as setas de navegação
            document.querySelector('.swiper-button-next').addEventListener('click', function() {
                swiper.autoplay.stop();
            });

            document.querySelector('.swiper-button-prev').addEventListener('click', function() {
                swiper.autoplay.stop();
            });
        });
    </script>
</body>

</html>