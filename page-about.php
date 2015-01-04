<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
  <?php the_title('<h2 class="sub-header">', '</h2>'); ?>
  <div class="page-intro">
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  ?>
  </div><!-- .intro-text -->
  <h3>
    Find me online
  </h3>
  <ul class="ext-link-list">
    <li class="github-link">
      <a href="http://www.github.com/n0z3ro" target="_blank">
        <img src="<?php echo(get_stylesheet_directory_uri()) .'/images/github.png' ?>" alt="GitHub Link">
        GitHub
      </a>
    </li>
    <li class="main-site-link">
      <a href="http://www.n0z3ro.com/" target="_blank">
        <img src="<?php echo(get_stylesheet_directory_uri()) .'/images/n0z3ro-logo.png' ?>" alt="n0z3ro Link">
        n0z3ro.com
      </a>
    </li>
    <li class="twitter-link">
      <a href="http://www.twitter.com/n0z3ro" target="_blank">
        <img src="<?php echo(get_stylesheet_directory_uri()) .'/images/twitter.png' ?>" alt="Twitter Link">
        Twitter
      </a>
    </li>
    <li class="linkedin-link">
      <a href="http://www.linkedin.com/in/n0z3ro" target="_blank">
        <img src="<?php echo(get_stylesheet_directory_uri()) .'/images/linkedin.png' ?>" alt="LinkedIn Link">
        LinkedIn
      </a>
    </li>
    <li class="clear-both"></li>
  </ul>
  
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
