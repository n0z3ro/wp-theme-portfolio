<?php get_header(); ?>

<div id="primary" class="content-area">
  
  <?php while ( have_posts() ) : the_post() ?>
    <?php the_content(); ?>
  <?php endwhile; ?>

</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
