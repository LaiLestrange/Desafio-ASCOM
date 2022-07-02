
    <footer>

    <?php
          wp_nav_menu(
            array(
              'menu' => 'footer',
              'container' => '',
              'theme_location' => 'footer',
              'items_wrap' => '<ul class="social-media">%3$s</ul>'
            )
          );
          ?>
      <div class="assinatura text-center">
        <div class="assinatura-copyright">
          <p class="assinatura-p">
            Copyright 2020 © - Todos os direitos reservados - Universidade
            Estadual do Sudoeste da Bahia
          </p>
          <p class="assinatura-p">Desenvolvido pela ASCOM / CHP</p>
          <p class="assinatura-p">
            Todas as informações aqui encontradas são de inteira
            responsabilidade do Univerciência
          </p>
        </div>
        <div class="assinatura-orgaos">
          <div class="assinatura-img assinatura-uesb">
            <img
              class="assinatura-uesb-simbolo"
              src="/wp-content/themes/univerciencia/assets/images/assinatura/uesb-simbolo.png"
              alt="uesb"
            />
            <img
              class="assinatura-uesb-nome"
              src="/wp-content/themes/univerciencia/assets/images/assinatura/uesb-nome.png"
              alt="uesb"
            />
          </div>
          <div class="assinatura-img assinatura-gov">
            <img
              class="assinatura-govbahia"
              src="/wp-content/themes/univerciencia/assets/images/assinatura/govbahia.png"
              alt="governo da bahia"
            />
          </div>
        </div>
      </div>
    </footer>

    <?php
    wp_footer();
    ?>
  </body>
</html>
