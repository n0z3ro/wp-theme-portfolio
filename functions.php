<?php
if (! isset($content_width)){
  $content_width = 1200; /* pixels */
}

//hooks
add_action('after_setup_theme', 'theme_settings');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('wp_print_styles', 'load_fonts');

//functions
function theme_settings(){
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
  ));
  add_theme_support('custom-background',apply_filters('n0z3ro_p_custom_background_args',array(
    'default-color' => 'F7F8F9',
    'default-image' => '',
  )));
  add_theme_support('post-thumbnails');
  
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'n0z3ro_p'),
  ));
}
function theme_scripts() {
  wp_enqueue_style('main', get_stylesheet_uri());
  //wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
}
function load_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Anonymous+Pro:400,400italic,700,700italic');
  wp_enqueue_style( 'googleFonts');
}
