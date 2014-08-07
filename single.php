<?php
/**
 * The Template for displaying all single posts.
 *
 * @package gwt_wp
 */

get_header();
include_once('inc/banner.php');
?>

<div id="main" class="container-main" role="document">
	<div class="row">
		<?php govph_displayoptions( 'govph_sidebar_left' ); ?>
		
		<div id="content" class="<?php govph_displayoptions( 'govph_content_position' ); ?>columns" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part ('content', 'single'); ?>
				
				<?php //gwt_wp_content_nav( 'nav-below' ); ?>
				
				<!-- comments (uncommented out) -->
				<?php
					//If comments are open or there is at least one comment, load up the comment template
					//if ( comments_open() || '0' !=get_comments_number() )
					//	comments_template();
				?>
			<?php endwhile; //end of the loop ?>
		</div><!-- end content -->
		
				<?php govph_displayoptions( 'govph_sidebar_right' ); ?>
		
	</div><!-- end row -->
</div><!-- end main -->

<?php get_footer(); ?>