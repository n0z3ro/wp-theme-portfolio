<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!--<title>-->
    <?php
    //Alt title method w/page numbers
    /*
    global $page, $paged;
    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
    */
    ?>
  <!--</title>-->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <div class="logo-link">
      <a href="<?php echo get_option('home'); ?>">
        <img src="<?php echo(get_stylesheet_directory_uri()) .'/images/n0z3ro-logo.png' ?>">
      </a>
    </div>
    <div class="site-title">
      <h1>
        <?php bloginfo( 'name' ); ?>
      </h1>
    </div>
    <nav class="site-navigation main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- .site-navigation .main-navigation -->
  </header><!-- #masthead .site-header -->
<div id="main" class="site-main" role="main">
