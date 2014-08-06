<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php gwt_wp_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>
		</div><!-- #content -->
		<?php govph_displayoptions( 'govph_sidebar_right' ); ?>
		</div><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
