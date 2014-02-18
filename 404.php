<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package gwt_wp
 */

get_header();
include_once('inc/banner.php');
?>
  <div id="container-main" class="container-main" role="document">
    <div id="main" class="row">

			<section class="error-404 not-found">
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location.', 'gwt_wp' ); ?></p>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( gwt_wp_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'gwt_wp' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'gwt_wp' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>