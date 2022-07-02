<?php
get_header();
?>

<article>
  <?php
  the_posts_pagination();
  ?>

  <?php

  if (have_posts()) {
    while (have_posts()) {
      the_post();
      echo ("hi");

      get_template_part('template-parts/content', 'episodes');
    }
  }


  ?>

</article>

<?php
get_footer();
?>