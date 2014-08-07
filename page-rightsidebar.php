<?php
/**
 * Template Name: Right Sidebar
 * @package gwt_wp
 */

get_header();
include_once('inc/banner.php');
?>

<div id="main" class="container-main" role="document">
	<div class="row">
		
		<div id="content" class="large-8 columns" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part ('content', 'page'); ?>
				
				<!-- comments (uncommented out) -->
				<?php
					//If comments are open or there is at least one comment, load up the comment template
					//if ( comments_open() || '0' !=get_comments_number() )
					//	comments_template();
				?>
			<?php endwhile; //end of the loop ?>
		</div><!-- end content -->
		
		<!-- sidebar widget area -->
		<aside id="sidebar" class="large-4 columns" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			
			<?php if ( ! dynamic_sidebar( 'right-sidebar' ) ) : ?>
				
				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>
				
				<aside id="archives" class="widget">
					<div class="panel">
						<h5 class="widget-title"><?php _e( 'Archives', 'gwt_wp' ); ?></h5>
		            	<ul>
		              	  <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
		            	</ul>
					</div class="panel">
				</aside>
				
				<!-- site meta (uncommented out) -->
				<!--aside id="meta class="widget"">
					<div class="panel">
						<h5 class="widget-title"><?php // _e( 'Meta', 'gwt_wp' ); ?></h5>
			            <ul>
			              <?php wp_register(); ?>
			              <li><?php wp_loginout(); ?></li>
			              <?php wp_meta(); ?>
			            </ul>
					</div>
				</aside-->
					
			<?php endif; ?>
		</aside>
		
	</div><!-- end row -->
</div><!-- end main -->

<?php get_footer(); ?>
