<?php
/*
Template Name: Category Links
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
  <div class="post-wrap">
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  ?>
  </div>
  
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
