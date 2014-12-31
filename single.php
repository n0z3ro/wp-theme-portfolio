<?php get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    while ( have_posts() ) : the_post();
      $getcat = get_the_category();
      foreach(get_the_category() as $category){
        echo '<h2 class="sub-header"><a href="'. get_category_link($category->term_id) . '">' . $category->name . '</a></h2>';
      }
      the_title('<h2 class="post-title">', '</h2>');
      
      if (has_post_thumbnail()){
  ?>
        <div class="primary-img">
          <div class="prev-post">
            <?php if (get_adjacent_post( true, '', true)){ ?>
              <?php previous_post_link('<div>%link</div>', 'Previous post in category', TRUE); ?>
            <?php }else{ ?>
              no prev post
            <?php }; ?>
          </div>
          <?php the_post_thumbnail(); ?>
          <div class="next-post">
            <?php if (get_adjacent_post( true, '', false)){ ?>
              <?php next_post_link('%link', 'Next post in category', TRUE); ?>
            <?php }else{ ?>
              no next post
            <?php }; ?>
          </div>
        </div>
  <?php
      }
  ?>
  
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  
  <?php endwhile; ?>
  <?php wp_reset_query() ?>
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
