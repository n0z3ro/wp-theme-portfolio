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
      <?php
      $cat = get_query_var('cat');
      $currentcat = get_category ($cat);
      echo $currentcat->cat_name;
      ?>
    </h3>
      <ul>
      <?php while ( have_posts() ) : the_post() ?>
        <?php if (has_post_thumbnail()){ ?>
          <?php
          $title_alt = get_the_title();
          $thumbnail_attr = array(
            'alt' => $title_alt,
            'title' => $title_alt
          );
          ?>
          <li class="home-post-image">
            <a href="<?php echo get_permalink(); ?>">
              <?php the_post_thumbnail('full', $thumbnail_attr); ?>
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