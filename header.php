<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>
    <?php
      wp_title('');
      if(wp_title('', false)) { echo ' :: '; } ?><?php bloginfo('name');
    ?>
  </title> 
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <nav role="navigation" class="site-navigation main-navigation">
    </nav><!-- .site-navigation .main-navigation -->
  </header><!-- #masthead .site-header -->
<div id="main" class="site-main">