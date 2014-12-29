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
    <ul>
      <?php
        $cats = get_categories();
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
      ?>
              <li class="list-post-image">
                <a href="<?php echo get_permalink(); ?>">
                  <?php the_post_thumbnail('full', $thumbnail_attr); ?>
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
      "Lorem Ipsum and filler text and such"<br>
      - Author
    </div>
  </div>
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
