<?php
/**
 * Template Name: Full Width
 * @package gwt_wp
 */

get_header();
include_once('inc/banner.php');
?>

<div id="main" class="container-main" role="document">
	<div class="row">
	
	<div id="content" class="large-12 columns" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part ('content', 'page'); ?>
			
			<!-- comments (uncommented out) -->
			<?php
				//If comments are open or there is at least one comment, load up the comment template
				//if ( comments_open() || '0' !=get_comments_number() )
				//	comments_template();
			?>
		<?php endwhile; //end of the loop ?>
	</div>
</div>

<?php get_footer(); ?>
