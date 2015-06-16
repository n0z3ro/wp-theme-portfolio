<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('jquery_swipe'); ?>
  <?php wp_enqueue_script('n0z_scripts'); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <div class="logo-link">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo(get_stylesheet_directory_uri()) .'/images/n0z3ro-logo.png' ?>" alt="n0z3ro Logo">
      </a>
    </div>
    <div class="site-title">
      <h1>
        <?php bloginfo( 'name' ); ?>
      </h1>
    </div>
    <nav class="site-navigation main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      <div class="clear-both"></div>
    </nav><!-- .site-navigation .main-navigation -->
  </header><!-- #masthead .site-header -->
<div id="main" class="site-main" role="main">
