<a href="<?php the_permalink(); ?>">
  <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="thumbnail-card" /></a>
<div class="card-infos">

  <p class="data-episodio"><?php echo get_the_date(); ?></p>

  <a href="<?php the_permalink(); ?>">
    <p class="titulo-episodio"><?php the_title(); ?></p>
  </a>

  <p class="descricao-episodio"><?php the_excerpt(); ?></p>

</div>