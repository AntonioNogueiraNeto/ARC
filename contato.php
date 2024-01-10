<section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-up">Entre em Contato</h2>
            <p data-aos="fade-up">
                Pronto para transformar suas demandas logísticas em soluções eficientes? <br> Entre em contato com a ARC Transporte e Logística e descubra como podemos impulsionar sua jornada com comprometimento, inovação e excelência.
            </p>
        </div>
        <style>
            .contato-boxes {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .boxes {
                width: 300px;
                height: 200px;
            }
        </style>
        <div class="row justify-content-center contato-boxes">
            <div class="boxes" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Nosso Endereço</h3>
                    <p>Rua Oitenta e Cinco, 775 Tropical - Contagem/MG 32070-010</p>
                </div>
            </div>

            <div class="boxes" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box" style="padding: 40px;">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <a href="mailto:comercial@arctransporte.com.br">comercial@arctransporte.com.br</a>


                </div>
            </div>
            <div class="boxes" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box" style="padding: 45px;">
                    <i class="bx bx-phone-call"></i>
                    <h3>Telefone</h3>
                    <a href="tel:+553135191491">
                        (31) 3519-1491
                    </a>
                </div>
            </div>

            <style>
                .mapa {
                    margin: auto;
                    justify-content: center;
                    align-items: center;

                    width: 700px;
                }
            </style>

            <div class="mapa" data-aos="fade-up" data-aos-delay="200">

               


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.37761656016!2d-44.11915272402304!3d-19.908485937640496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6eaea492894e5%3A0x1ec6c553e13bf3da!2sR.%20Oitenta%20e%20Cinco%2C%20775%20-%20Tropical%2C%20Contagem%20-%20MG%2C%2032065-458!5e0!3m2!1sen!2sbr!4v1704910568482!5m2!1sen!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-xl-9 col-lg-12 mt-4">
                <form action="enviaremailcontato.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required />
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder=" Email" required />
                        </div>
                    </div>
                    <div style="padding-top: 20px;">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required />
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input class="form-control main" type="tel" maxlength="15" onkeyup="handlePhone(event)" name="telefone" placeholder="Telefone de contato" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">
                            Seu email foi enviado.
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Enviar</button>

                        <?php
                        if (isset($_GET['msg'])) {
                            $mensagem_confirmacao_footer = $_GET['msg'];
                            echo "<p class='text-success' style='margin-top:20px;'>" . $mensagem_confirmacao_footer . "</p>";
                        }
                        ?>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->


<script>
    const handlePhone = (event) => {
        let input = event.target
        input.value = phoneMask(input.value)
    }

    const phoneMask = (value) => {
        if (!value) return ""
        value = value.replace(/\D/g, '')
        value = value.replace(/(\d{2})(\d)/, "($1) $2")
        value = value.replace(/(\d)(\d{4})$/, "$1-$2")
        return value
    }
</script>