<?php

/*
Plugin Name: Envato FlexSlider
Plugin URI:
Description: A simple plugin that integrates FlexSlider (http://flex.madebymufffin.com/) with WordPress using custom post types!
Author: Joe Casabona
Version: 0.5
Author URI: http://www.casabona.org
*/

/*Some Set-up*/
define('EFS_PATH', get_template_directory_uri() . '/inc/vendors/' . basename( dirname(__FILE__) ) . '/' );
define('EFS_NAME', "Envato FlexSlider");
define ("EFS_VERSION", "0.5");

/*Files to Include*/
require_once('slider-img-type.php');

/**
 * gwt edit
 */
function gwt_enqueue_sript(){
	/*Add the Javascript/CSS Files!*/
	wp_enqueue_script('flexslider', EFS_PATH.'jquery.flexslider-min.js', array('jquery'));
	wp_enqueue_style('flexslider_css', EFS_PATH.'flexslider.css');
}
add_action( 'wp_enqueue_scripts', 'gwt_enqueue_sript' );
/**
 * end gwt edit
 */

/*Add the Hooks to place the javascript in the header*/

function efs_script(){

print '<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
    jQuery(\'.flexslider\').flexslider();
  });
</script>';

}

add_action('wp_head', 'efs_script');

//function efs_get_slider(){

//	$slider= '<div class="flexslider">
//	  <ul class="slides">';

//	$efs_query= "post_type=slider-image";
//	query_posts($efs_query);


//	if (have_posts()) : while (have_posts()) : the_post();
//		$img= get_the_post_thumbnail( $post->ID, 'full' );

//		$slider.='<li>'.$img.'</li>';

//	endwhile; endif; wp_reset_query();


//	$slider.= '</ul>
//	</div>';

//	return $slider;
//}

function efs_get_slider(){

	$efs_query= "post_type=slider-image";
	query_posts($efs_query);
	
	global $post_id;
	
	if (have_posts()) : 
		
		$slider= '<section class="slider">
		  <div class="flexslider carousel">
		  <ul class="slides">';
		  
		while (have_posts()) : the_post(); 
		$img= get_the_post_thumbnail($post_id, 'full');
		$slide_link= get_the_content($post_id);
		$caption = get_the_title();

		$slider.='<li><a href='.$slide_link.'>'.$img.'<p class="flex-caption">'.$caption.'</p></a></li>';
		
	/* if (have_posts()) : while (have_posts()) : the_post(); 
		$img= get_the_post_thumbnail($post->ID, 'full');
		$slide_link= get_the_content($post->ID);
		$caption = get_the_excerpt();

		$slider.='<li><a href='.$slide_link.'>'.$img.'<p class="flex-caption">'.$caption.'</p></a></li>'; */

endwhile; endif; wp_reset_query();

	$slider.= '</ul>
	</div>
	</section>';

	return $slider;
}






/**add the shortcode for the slider- for use in editor**/

function efs_insert_slider($atts, $content=null){

$slider= efs_get_slider();

return $slider;

}


add_shortcode('ef_slider', 'efs_insert_slider');



/**add template tag- for use in themes**/

function efs_slider(){

	print efs_get_slider();
}


?>
