<?php 

function danstheme_theme_support() {
  // Adds diynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'danstheme_theme_support');


function danstheme_menus() {

  $locations = array(
    'primary' => "Desktop Primary Left Sidebar",
    'footer' => "Footer Menu Items"
  );

  register_nav_menus($locations);
}

add_action('init', 'danstheme_menus');


function danstheme_register_styles() {

  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('danstheme-style', get_template_directory_uri() . "/style.css", array('danstheme-bootstrap'), $version, 'all');
  wp_enqueue_style('danstheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('danstheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'danstheme_register_styles');


function danstheme_register_scripts() {

  wp_enqueue_script('danstheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
  wp_enqueue_script('danstheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
  wp_enqueue_script('danstheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
  wp_enqueue_script('danstheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action( 'wp_enqueue_scripts', 'danstheme_register_scripts');


?>