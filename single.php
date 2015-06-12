<?php get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    while ( have_posts() ) : the_post();
      $getcat = get_the_category();
      echo '<h2 class="sub-header"><a href="'. get_category_link($getcat[0]->term_id) . '">' . $getcat[0]->name . '</a></h2>';
      the_title('<h2 class="post-title">', '</h2>');
      
      if (has_post_thumbnail()){
  ?>
        <div class="post-wrap">
          <div class="next-post-wrap post-nav-wrap">
            <?php
              if (get_adjacent_post( true, '', false)){
                $nextPost = get_next_post(true);
                $nextthumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($nextPost->ID), array(100,100), false, '');
                (string)$nextthumbnail = $nextthumbnail[0];
                next_post_link('<div class="next-post-link nav-post-link" style="background:url('.get_stylesheet_directory_uri().'/images/dark-nav-arrow-left.png) 0 0 / 100px 100px no-repeat, url('.$nextthumbnail.') 0 0 / 100px 100px no-repeat;">%link</div>', '%title', TRUE);
              }else{
                if (is_active_sidebar('cat_list')) :
                  dynamic_sidebar( 'cat_list' );
                endif;
              };
            ?>
          </div>
          <div class="primary-img">
            <?php
            //$getcat = get_the_category();
            foreach ( $getcat as $category ) {
              if ($category->name == 'Flash'){
                $flash_detected = true;
              }
            }
            
            if ($flash_detected == true){
              the_content();
            }else{
              the_post_thumbnail();
            }

            ?>
          </div>
          <div class="prev-post-wrap post-nav-wrap">
            <?php
              if (get_adjacent_post( true, '', true)){
                $prevPost = get_previous_post(true);
                $prevthumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($prevPost->ID), array( 100,100 ), false, '');
                (string)$prevthumbnail = $prevthumbnail[0];
                previous_post_link('<div class="prev-post-link nav-post-link" style="background:url('.get_stylesheet_directory_uri().'/images/dark-nav-arrow-right.png) 0 0 / 100px 100px no-repeat, url('.$prevthumbnail.') 0 0 / 100px 100px no-repeat;">%link</div>', '%title', TRUE);
              }else{
                if (is_active_sidebar('cat_list')) :
                  dynamic_sidebar( 'cat_list' );
                endif;
              };
            ?>
          </div>
        </div>
        <div class="post-content">
          <?php
            if ($flash_detected == true){
              //content already posted
            }else{
              the_content();
            }
          ?>
        </div>
  <?php } ?>
  <?php endwhile; ?>
  <?php wp_reset_query() ?>
</div><!-- #primary .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
