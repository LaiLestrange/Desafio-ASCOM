  <?php
  get_header();
  ?>



  <article>
    <?php
    get_template_part('template-parts/content', 'newEpisode');
    ?>
  </article>

  <article class="episodios-atuais text-center">

    <div class="episodios-anteriores">
      <div class="episodios-anteriores-titulo">
        <h3>programas anteriores da atual temporada</h3>

        <div class="pagination pagination-ep justify-content-center">
          <span class="page1"></span>
          <span class="page2"></span>
          <span class="page3"></span>
        </div>
        <!--#aqui o ideal é trocar para a função de paginação e aplicar o css em cima dela-->

      </div>
    </div>

    <div class="cards-episodios container">

      <?php

      $i = 0;
      $rowAbre = '<div class="row mt-5">';
      $rowFecha = '</div>';
      if (have_posts()) {

        $getposts = get_posts();
        foreach ($getposts as $i => $post) {
          if ($i == 0) {
            echo ($rowAbre);
            get_template_part('template-parts/content', 'episodes');
          } else if ($i == 1) {
            get_template_part('template-parts/content', 'episodes');
            echo ($rowFecha);
          } else if ($i == 2) {
            echo ($rowAbre);
            get_template_part('template-parts/content', 'episodes');
          } else if ($i == 3) {
            get_template_part('template-parts/content', 'episodes');
            echo ($rowFecha);
          }
        }
      }
      ?>
    </div>

    <div class="mais-episodios">
      <i class="uil uil-plus-circle"></i>
    </div>
    <!--#aqui o ideal seria o botão adicionar mais uma seção de episódios postados-->

  </article>
  <article class="temporadas-anteriores text-center">
    <?php
    get_template_part('template-parts/content', 'seasons');
    ?>
  </article>


  <?php
  get_footer();
  ?>