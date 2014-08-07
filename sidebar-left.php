<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package gwt_wp
 */
?>

<aside id="sidebar" class="<?php govph_displayoptions( 'govph_sidebar_position' ); ?>columns" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	
	<?php if ( ! dynamic_sidebar( 'left-sidebar' ) ) : ?>
		
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
				<h5 class="widget-title"><?php //_e( 'Meta', 'gwt_wp' ); ?></h5>
	            <ul>
	              <?php //wp_register(); ?>
	              <li><?php //wp_loginout(); ?></li>
	              <?php //wp_meta(); ?>
	            </ul>
			</div>
		</aside-->
			
	<?php endif; ?>
</aside>