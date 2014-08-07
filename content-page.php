<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package gwt_wp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gwt_wp' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	
	<!-- edit post link (commented out) -->
	<?php // edit_post_link( __( 'Edit', 'gwt_wp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
</article>
