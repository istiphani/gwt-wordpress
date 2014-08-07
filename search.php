<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package gwt_wp
 */

get_header();
include_once('inc/banner.php');
?>

<div id="main" class="container-main" role="document">
	<div class="row search-results">
		<div id="content" class="<?php govph_displayoptions( 'govph_content_position' ); ?>large-12 columns">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php gwt_wp_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>
		</div>
		
		<?php // get_sidebar(); ?>
		
	</div>
</div>

<?php get_footer(); ?>