<?php
/**
 * Template Name: Fullwidth
 * @package gwt_wp
 */

get_header();
include_once('inc/banner.php');
?>

  <div id="container-main" class="container-main" role="document">
    <div id="main" class="row">

    <?php get_sidebar('left'); ?>
    <div id="content" class="large-6 columns" role="main">
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
            comments_template();
        ?>

      <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
    <?php get_sidebar('right'); ?>
    </div><!-- #main -->
  </div><!-- #primary -->


<?php get_footer(); ?>
