<?php
/**
 * gwt_wp functions and definitions
 *
 * @package gwt_wp
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'gwt_wp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function gwt_wp_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on gwt_wp, use a find and replace
	 * to change 'gwt_wp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'gwt_wp', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
    'main_nav' => __( 'Auxiliary Menu', 'gwt_wp' ),
		'topbar_left' => __( 'Left Menu Top bar', 'gwt_wp' ),
		'topbar_right' => __( 'Right Menu Top bar', 'gwt_wp' ),
	) );

class Topbar_Nav_Menu extends Walker_Nav_Menu
{
     function start_lvl( &$output, $depth = 0, $args = array() ) {
          $indent = str_repeat("\t", $depth);
          $output .= "\n$indent<ul class=\"dropdown\">\n";
     }

     function end_lvl( &$output, $depth = 0, $args = array() ) {
          $indent = str_repeat("\t", $depth);
          $output .= "$indent</ul>\n";
     }

     function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

          $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
          $class_names = $value = '';
          $classes = empty( $item->classes ) ? array() : (array) $item->classes;

          $classes[] = 'menu-item-' . $item->ID;

          $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

          $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';



          $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );

          $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';



          $output .= $indent . '<li' . $id . $value . $class_names .'>';



          $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';

          $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';

          $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

          $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';



          $item_output = $args->before;

          $item_output .= '<a'. $attributes .'>';

          $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

          $item_output .= '</a>';

          $item_output .= $args->after;



          $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

     }



     function end_el( &$output, $item, $depth = 0, $args = array() ) {

          $output .= "</li><li class=\"divider\"></li>\n";

     }



  function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

      $id_field = $this->db_fields['id'];

      if ( !empty( $children_elements[ $element->$id_field ] ) ) {

          $element->classes[] = 'has-dropdown';

      }

      Walker_Nav_Menu::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );

  }

}



	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	// add_theme_support( 'custom-background', apply_filters( 'gwt_wp_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // gwt_wp_setup
add_action( 'after_setup_theme', 'gwt_wp_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function gwt_wp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'gwt_wp' ),
		'id'            => 'left-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
  register_sidebar( array(
    'name'          => __( 'Right Sidebar', 'gwt_wp' ),
    'id'            => 'right-sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Agency Footer 1', 'gwt_wp' ),
    'id'            => 'footer-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h6 class="widget-title">',
    'after_title'   => '</h6>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Agency Footer 2', 'gwt_wp' ),
    'id'            => 'footer-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h6 class="widget-title">',
    'after_title'   => '</h6>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Agency Footer 3', 'gwt_wp' ),
    'id'            => 'footer-3',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h6 class="widget-title">',
    'after_title'   => '</h6>',
  ) );
}
add_action( 'widgets_init', 'gwt_wp_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function gwt_wp_scripts() {
	wp_enqueue_style( 'gwt_wp-foundation', get_template_directory_uri() . '/css/foundation.css', array(), '20130729' );
	wp_enqueue_style( 'gwt_wp-style', get_stylesheet_uri(), array(), '20130729' );

	wp_enqueue_script( 'gwt_wp-modernizr', get_template_directory_uri() . '/js/vendor/custom.modernizr.js', array(), '20130729', false );

	wp_enqueue_script( 'gwt_wp-navigation', get_template_directory_uri() . '/js/foundation.min.js', array(), '20130729', true );
	wp_enqueue_script( 'gwt_wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'gwt_wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'gwt_wp-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'gwt_wp_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * The Options Page.
 */
require get_template_directory() . '/inc/options.php';

/**
 * Plugin Name: Envato FlexSlider
 * Plugin URI:
 * Description: A simple plugin that integrates FlexSlider (http://flex.madebymufffin.com/) with WordPress using custom post types!
 * Author: Joe Casabona
 * Version: 0.5
 * Author URI: http://www.casabona.org
 */
require get_template_directory() . '/inc/vendors/envato-flex-slider/envato-flex-slider.php';







/**
 * Custom Widget: PST Widget
 * Widget URI:
 * Description: Widget that displays PST
 * Author: Mary Grace Fernandez-Naagas
 * Version: 0.5
 * Author URI: 
 */
 
// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('Philippine Standard Time', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Displays Philippine Standard Time', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
echo __( '<iframe src = "http://kidlat.pagasa.dost.gov.ph/ourtime.shtml" width="300" height="100" scrolling="no"></iframe>', 'wpb_widget_domain' );
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );



/*Theme options page*/
if ( file_exists( STYLESHEETPATH . '/class.my-theme-options.php' ) ) {
	require_once( STYLESHEETPATH . '/class.my-theme-options.php' );
}
