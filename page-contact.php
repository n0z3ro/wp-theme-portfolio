<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
  
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
    if (is_active_sidebar('contact_form')) :
      dynamic_sidebar( 'contact_form' );
    endif;
  ?>
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
