    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="clients-slider swiper">
          <div class="section-title" data-aos="fade-up">
            <h2>Alguns de nossos Clientes</h2>

          </div>
          <div class="swiper-wrapper align-items-center">




            <?php
            // Caminho para a pasta das imagens
            $caminho = 'assets/img/clients';

            // Obtém a lista de arquivos na pasta
            $files = scandir($caminho);

            // Itera sobre os files
            foreach ($files as $file) {
              // Verifica se o arquivo é uma imagem (pode adicionar mais extensões, se necessário)
              $extensoes_permitidas = [ 'png'];
              $extensao = pathinfo($file, PATHINFO_EXTENSION);
              if (in_array(strtolower($extensao), $extensoes_permitidas)) {
                // Exibe a imagem dentro de um swiper-slide
                echo '<div class="swiper-slide">';
                echo '<img src="' . $caminho . '/' . $file . '" />';
                echo '</div>';
              }
            }
            ?>
          
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->