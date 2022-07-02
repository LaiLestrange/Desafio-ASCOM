<?php

function univerciencia_theme_support()
{
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'univerciencia_theme_support');
function univerciencia_register_styles()
{

  $version = wp_get_theme()->get("Version");

  wp_enqueue_style('univerciencia-css', get_template_directory_uri() . "/style.css", array('univerciencia-bootstrap'), $version, 'all');
  wp_enqueue_style('univerciencia-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css", array(), "5.2.0-beta1", 'all');
  wp_enqueue_style('univerciencia-iconscout', "https://unicons.iconscout.com/release/v4.0.0/css/line.css", array(), "4.0.0", 'all');
}

add_action('wp_enqueue_scripts', 'univerciencia_register_styles');



function univerciencia_register_scripts()
{

  wp_enqueue_script('univerciencia-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", array(), "5.2.0-beta1", 'all', true);
}

add_action('wp_enqueue_scripts', 'univerciencia_register_scripts');


function univerciencia_menus()
{
  $locations = array(
    'primary' => "navbar-header",
    'footer' => "social-media-items",
  );

  register_nav_menus($locations);
}

add_action('init', 'univerciencia_menus');
