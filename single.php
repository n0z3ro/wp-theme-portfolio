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
          <div class="next-post-wrap post-nav-wrap">
            <?php
              if (get_adjacent_post( true, '', false)){
                $nextPost = get_next_post(true);
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) );
                next_post_link('<div class="prev-post-link nav-post-link">%link</div>', $nextthumbnail, TRUE);
              }else{
            ?>
              no next post
            <?php }; ?>
          </div>
          <?php the_post_thumbnail(); ?>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
          <div class="prev-post-wrap post-nav-wrap">
            <?php
              if (get_adjacent_post( true, '', true)){
                $prevPost = get_previous_post(true);
                $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );
                previous_post_link('<div class="prev-post-link nav-post-link">%link</div>', $prevthumbnail, TRUE);
              }else{
            ?>
              no prev post
            <?php }; ?>
          </div>
        </div>
  <?php } ?>
  <?php endwhile; ?>
  <?php wp_reset_query() ?>
</div><!-- #primary .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
