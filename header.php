<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package gwt_wp
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="<?php echo get_bloginfo('wpurl') ?>/wp-content/themes/gwt_wp_42/favicon.ico">

	<?php wp_head(); ?>
	
	<style>
	  .container-main a {
		  <?php govph_displayoptions( 'govph_anchorcolor' ); ?>
	  }
	  
	  div.container-masthead {
		  <?php govph_displayoptions( 'govph_headercolor' ); ?>
		  <?php govph_displayoptions( 'govph_headerimage' ); ?>
	  }
	  
  	h1.logo a {
		<?php govph_displayoptions( 'govph_logo' ); ?>
		<?php govph_displayoptions( 'govph_logo_position' ); ?>
		}
	
	div.container-banner {
		<?php govph_displayoptions( 'govph_slidercolor' ); ?>
    	<?php govph_displayoptions( 'govph_sliderimage' ); ?>
	}
	
	</style>
</head>

<body <?php body_class(); ?>>

<!-- topbar navigation -->	
<div id="main-nav">
	<nav class="container-topbar">
		<div class="row">
			<div class="large-12 columns">
				<nav class="top-bar" data-topbar>
					
					<ul class="title-area">
						<li class="name">
							<h1><a href="http://www.gov.ph">GOVPH</a></h1>
						</li>
						<li class="toggle-topbar menu-icon"><a href="#"></li>
					</ul>
					
					<section class="top-bar-section">
						
						<!-- right navigation -->
						<ul class="right">
							<?php wp_nav_menu( array('theme_location'  => 'topbar_right', 'items_wrap' => '<li class="divider"></li>%3$s', 'container' => false, 'walker' => new Topbar_Nav_Menu() )); ?>
			                <li class="search"><?php get_search_form(); ?></li>
						</ul>
					
						<!-- left navigation -->
		                <ul class="left">
		                  <?php wp_nav_menu( array('theme_location'  => 'topbar_left', 'items_wrap' => '<li class="divider"></li>%3$s', 'container' => false, 'walker' => new Topbar_Nav_Menu() )); ?> 
		                </ul>
					
					</section>
				</nav>
			</div>
		</div>
	</nav>
</div>  

<?php
  // create a dynamic column on ear content
  $name_slogan_class = ' large-12';
  $ear_content_class = '';
  $ear_content_2_class = '';
  // if both content are available
  if(is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')){
    $name_slogan_class = ' large-6';
    $ear_content_class = ' large-3';
    $ear_content_2_class = ' large-3';
  }
  elseif(is_active_sidebar('ear-content-1') && !is_active_sidebar('ear-content-2')){
    $name_slogan_class = ' large-9';
    $ear_content_class = ' large-3';
    //$ear_content_2_class = '';
  }
  elseif(!is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')){
    $name_slogan_class = ' large-9';
    //$ear_content_class = '';
    $ear_content_2_class = ' large-3';
  }
?>

<!-- masthead -->
<div class="container-masthead">
	<div class="row">
		<div class="columns<?php echo $name_slogan_class ?>"> 
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
		
	    <?php if(is_active_sidebar('ear-content-1')): ?>
			<div class="<?php echo $ear_content_class ?> columns">
				<?php do_action( 'before_sidebar' ); ?>
				<?php dynamic_sidebar( 'ear-content-1' ) ?>
	      	</div>
	    <?php endif; ?>
		
	    <?php if(is_active_sidebar('ear-content-2')): ?>
	      	<div class="<?php echo $ear_content_2_class ?> columns">
				<?php do_action( 'before_sidebar' ); ?>
	      	  	<?php dynamic_sidebar( 'ear-content-2' ) ?>
	      </div>
	    <?php endif; ?>
		
	</div>
</div>