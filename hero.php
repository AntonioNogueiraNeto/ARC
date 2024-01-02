<style>
    .titulobranco {
        color: white !important;
    }

    .imagem-logo-hero {
        margin-bottom: 200px;
    }

    .imagem-logo-hero-box {
        padding: 0;
        margin: 0;
        width: 100%;
    }

    .cardlogo {
        background-color: white !important;
        color: #0D0B4A !important;
        box-shadow: 2px 4px 25px rgba(0, 0, 0, 0.1);
    }

    @media screen and (max-width: 768px) {
        .imagem-logo-hero {
            margin: 0;
            margin-bottom: 0;
            width: 90%;
        }

        .why-us .content {
            padding: 5px !important;
            background: #0d0b4a;
            border-radius: 4px;
            color: #fff;
        }

        .cardlogo {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .imagem-logo-hero-box {
            width: 200px;
            margin: auto;
            align-items: center;
        }

    }
</style>


<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container " data-aos="fade-in">
        <div class="d-flex align-items-center justify-content-end">
            <!-- <div class="order-2">
                <?php
                $mobile = detectar_dispositivo();

                if ($mobile != true) { // tela grande
                    echo '<img src="assets/img/logo2.png" class="imagem-logo-hero" alt="">';
                } else {
                    echo '<img src="assets/img/logo3.png" class="imagem-logo-hero" alt="">';
                }
                ?>
            </div> -->
        </div>
    </div>
</section>






<main id="main">
    <section id="why-us" class="why-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                    <div class="content cardlogo">
                        <!-- <h3>Porque Escolher a ARC como transportadora?</h3> -->
                        <!-- <img src="assets/img/logo2.png" class="imagem-logo-hero-box" alt=""> -->

                        <h3 style="text-align: center;">Porque Escolher a <strong>ARC</strong> como transportadora?</h3>
                        <p>
                            Na ARC Transportes e Logística, nossa dedicação à excelência e compromisso com a satisfação do cliente fazem de nós a escolha confiável para atender às suas necessidades de transporte.
                        </p>
                        <div class="text-center">
                            <!-- <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-flex">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0" style="background-color: #0D0B4A">
                                    <i class="bx bx-receipt titulobranco"></i>
                                    <h4 class="titulobranco">EM TODO TERRITORIO NACIONAL</h4>
                                    <p class="titulobranco">
                                        <!-- Com um alcance que se estende de norte a sul, garantimos uma presença sólida para atender às suas demandas logísticas. -->
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0" style="background-color: #971A1E;">
                                    <i class="bx bx-cube-alt" style="color: white;"></i>
                                    <h4 class="titulobranco">FROTA NOVA</h4>
                                    <p class="titulobranco">
                                        <!-- Nossa frota moderna e confiável é o alicerce da nossa eficiência operacional. Nossos veículos são equipados com tecnologia de última geração para assegurar a entrega de seus produtos de maneira segura e no prazo. -->
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>EXPERIÊNCIA COM DIVERSOS TIPOS DE CARGA</h4>
                                    <p>
                                        <!-- Seja qual for a complexidade ou natureza da sua carga, estamos preparados para enfrentar desafios, garantindo uma gestão eficaz durante todo o processo logístico. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us Section -->

</main>
<!-- End #main -->