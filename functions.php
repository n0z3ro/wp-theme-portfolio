<?php
if (! isset($content_width)){
  $content_width = 1200; /* pixels */
}

//hooks
add_action('after_setup_theme', 'theme_settings');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('wp_print_styles', 'load_fonts');
add_action('widgets_init', 'n0_widgets_init');

//filters
add_filter('widget_text', 'do_shortcode');

//functions
function theme_settings(){
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('custom-header');
  add_theme_support('html5', array(
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
  wp_enqueue_script( 'n0z_scripts', get_stylesheet_directory_uri() . '/js/mobile-ui.js', array(), '20120206', true );
}
function load_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Anonymous+Pro:400,400italic,700,700italic');
  wp_enqueue_style('googleFonts');
}
function n0_widgets_init(){
  register_sidebar(array(
    'name' => 'Categories List',
    'id' => 'cat_list',
    'before_widget' => '<div id="n0_cat_list">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => 'Contact Form',
    'id' => 'contact_form',
    'before_widget' => '<div class="contact-form">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
}
function n0_cat_func($atts, $content=null){
  extract(shortcode_atts(array('id' => ''), $atts));
  if (is_active_sidebar($id)){
    ob_start();
    dynamic_sidebar($id);
    $widgets= ob_get_contents();
    ob_end_clean();
    return $widgets;
  }else{
    return "";
  }
}
add_shortcode('n0_categories', 'n0_cat_func');