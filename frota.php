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
        width: 100%;
        height: 100%;
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
    <div class="container" id="portfolio">
        <div class="section-title" data-aos="fade-up">
            <h2>Frotas</h2>





        </div>
        <div class="fronta-box">
            <div class="swiper mySwiper swiperFrota">
                <div class="swiper-wrapper">

                    <?php
                    $caminho_pasta = 'assets/img/frota';
                    $arquivos = scandir($caminho_pasta);
                    foreach ($arquivos as $arquivo) {
                        $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
                        $extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
                        if (in_array(strtolower($extensao), $extensoes_permitidas)) {
                            echo '<div class="swiper-slide swiperSlideFrota">';
                            echo '<img class="frota-imagem-slide" src="' . $caminho_pasta . '/' . $arquivo . '" />';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,

            },
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            centeredSlides: true,
            speed: 4000,
            effect: "slide",

        });
    </script>
</body>

</html>