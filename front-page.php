<?php get_header(); ?>

<div id="primary" class="content-area">
  <h2 class="sub-header">
    Welcome!
  </h2> <!-- .sub-header -->
  <div class="page-intro">
    I take ideas and designs for the web and turn them into reality.<br>
    This is a collection of some of my favorite work so far.
  </div><!-- .intro-text -->
  <div class="latest-posts">
    <h3>
      Latest Portfolio Entries
    </h3>
    <ul>
      <?php
        $cat_args = array(
          'parent' => 0,
          'hide_empty' => 0
        );
        $cats = get_categories($cat_args);
        foreach ($cats as $cat) {
          $cat_id= $cat->term_id;
          query_posts("cat=$cat_id&orderby=date&posts_per_page=1");
          if (have_posts()) : while (have_posts()) : the_post();
            if (has_post_thumbnail()){
              $title_alt = get_the_title();
              $thumbnail_attr = array(
                'alt' => $title_alt,
                'title' => $title_alt
              );
              $thumbnail_array = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
              $thumbnail_url = $thumbnail_array[0];
      ?>
              <li class="list-post-image">
                <a href="<?php echo get_permalink(); ?>" style="background-image:url( <?php echo $thumbnail_url ?> );">
                  <?php //the_post_thumbnail('full', $thumbnail_attr); ?>
                </a>
              </li>
      <?php
            }
          endwhile; endif; 
        }
      ?>
      <li class="clear-both"></li>
    </ul>
  </div><!-- .latest-posts -->
  <div class="recommendations">
    <!-- Convert to Loop for Custom Post Type "quote" -->
    <h3>
      Recommendations
    </h3>
    <div class="quote">
      "Besides being a joy to work with, Clint is a creative problem solver who continually comes up with new ways to take care of problems and wow our clients. He has successfully developed several web application front ends for our company that have resulted in increased sales and customer satisfaction."<br>
      - <a href="https://www.linkedin.com/in/whittle" target="_blank">Chris Whittle</a>
    </div>
  </div>
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
