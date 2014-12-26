<?php get_header(); ?>

<div id="primary" class="content-area">
  <?php while ( have_posts() ) : the_post();
    the_title('<h2 class="sub-header">', '</h2>'); 
    if (has_post_thumbnail()){
      the_post_thumbnail();
    }
    the_content(); ?>

  <?php endwhile; ?>

</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
