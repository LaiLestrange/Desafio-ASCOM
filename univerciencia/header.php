<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
     wp_head();
    ?>


    <title>UNIVERCiência</title>
  </head>
  <body>
    <!-- header -->

    <header class="header text-center">
      <div class="header-background">

      <?php
        if (function_exists('the_custom_logo')){
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);

        }
      
      ?>
      <img class="header-name" src="<?php echo $logo[0]?>">
        
      </div>

      <nav class="navbar navbar-expand-md color-navbar">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarNavAltMarkup"
          >


          <?php
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
             'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
            )
          );
          ?>
          </div>
        </div>
      </nav>
    </header>