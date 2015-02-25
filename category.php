<?php get_header(); ?>

<div id="primary" class="content-area">
  <h2 class="sub-header">
    <?php
      $currentcat = get_category(get_query_var('cat'));
      echo $currentcat->cat_name;
    ?>
  </h2> <!-- .sub-header -->
  <div class="page-intro">
    Select an image for details.
  </div><!-- .intro-text -->
  <div class="latest-posts">
      <ul>
      <?php while ( have_posts() ) : the_post() ?>
        <?php if (has_post_thumbnail()){ ?>
          <?php
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
              <?php //the_post_title() ?>
            </a>
          </li>
        <?php } ?>
        <?php //the_content(); ?>
      <?php endwhile; ?>
      <li class="clear-both"></li>
    </ul>
  </div><!-- .latest-posts -->
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
