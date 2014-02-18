<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package gwt_wp
 */

get_header();
include_once('inc/banner.php');
?>

  <div id="container-main" class="container-main" role="document">
    <div id="main" class="row">
		<?php govph_displayoptions( 'govph_sidebar_left' ); ?>
		<div id="content" class="<?php govph_displayoptions( 'govph_content_position' ); ?>columns" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
		<?php govph_displayoptions( 'govph_sidebar_right' ); ?>
		</div><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
