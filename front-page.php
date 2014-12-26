<?php get_header(); ?>

<div id="primary" class="content-area">
  <h2 class="sub-header">
    Welcome!
  </h2> <!-- .sub-header -->
  <div class="page-intro">
    n0z3ro's Studio provides web and digital creative services. <br>
    This is a collection of the Studio's best work so far.
  </div><!-- .intro-text -->
  <div class="latest-posts">
    <h3>
      Latest Portfolio Entries
    </h3>
    <?php while ( have_posts() ) : the_post() ?>
      <?php
      if (has_post_thumbnail()){
        the_post_thumbnail('thumbnail');
      }
      ?>
      <?php //the_content(); ?>
    <?php endwhile; ?>
  </div><!-- .latest-posts -->
  <div class="recommendations">
    <!-- Convert to Loop for Custom Post Type "quote" -->
    <h3>
      Recommendations
    </h3>
    <div class="Quote">
      "Lorem Ipsum and filler text and such"<br>
      - Author
    </div>
  </div>
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
