<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Claudia Faria Imobiliária</title>

    <!-- Styles -->
    <link rel="stylesheet" href="whatsapp.css">
    <style>
        .btnZap {
            position: fixed;
            left: 20px;
            bottom: 20px;
            z-index: 999999999;
            cursor: pointer;
        }

        @keyframes whatsapp-anim {

            0%,
            100% {
                transform: scale(1);
            }

            20%,
            80% {
                transform: scale(0.9);
            }

            40%,
            60% {
                transform: scale(1.1);
            }
        }

        .tada.infinite {
            animation: whatsapp-anim 2s infinite;
        }
    </style>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
    <script async type="text/javascript" src="//wurfl.io/wurfl.js"></script>
</head>

<body>

    <!-- WhatsApp Button -->
    <div class="btnZap" onclick="detectarDispositivoPrincipal()">
        <span>
            <section class="tada infinite animated" data-wow-duration="2s" style="color: #fff;" data-wow-duration="2s"
                data-wow-name="whatsapp-anim">
                <img loading="lazy" alt="WhatsApp" src="assets/img/wp.png" style="max-width: 80px;" />
                <!-- <img src="assets/img/wp.png" alt=""> -->
            </section>
        </span>
    </div>

    <script>
        var zap_telefone = "+5531994491565";
        var zap_mensagem = 'Olá!!';
        var zap_exibirPulsar = true;
        var zap_apresentarContato = false;

        function detectarDispositivoPrincipal() {
            let linkRedirecionamentoWhatsapp = "";

            if (zap_apresentarContato) {
                linkRedirecionamentoWhatsapp = `https://wa.me/${zap_telefone}?text=${zap_mensagem}`;
            } else {
                linkRedirecionamentoWhatsapp = `https://${WURFL.is_mobile === true && WURFL.form_factor === "Smartphone"
                    ? "api"
                    : "web"
                    }.whatsapp.com/send?phone=${zap_telefone}&text=${zap_mensagem}`;
            }

            if (typeof GoogleAds_HashWhatsapp !== "undefined" && GoogleAds_HashWhatsapp.length > 0) {
                GoogleAds_gtag_report_conversion(linkRedirecionamentoWhatsapp, GoogleAds_HashWhatsapp);
            } else {
                window.open(linkRedirecionamentoWhatsapp, '_blank');
            }
        }
    </script>

    <!-- ShareThis Library -->
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=6426d93abba70e0012f39456&product=inline-share-buttons&source=platform"
        async="async"></script>

    <!-- Console Log -->
    <script>
        console.log('%cCache de arquivo', 'background-color: #009688; padding:3px 15px')
    </script>
</body>

</html>