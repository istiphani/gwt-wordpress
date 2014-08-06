<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package gwt_wp
 */
?><!DOCTYPE html>
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
  }
</style>
</head>

<body <?php body_class(); ?>>

<nav class="container-topbar">
    <div class="row">
        <div class="small-12 large-12 columns toplayer">
            <nav class="top-bar nomargin">
              <ul class="title-area">
                <!-- Title Area -->
                <li class="name">
                  <h1><a href="http://www.gov.ph"><img src="<?php echo get_bloginfo('wpurl') ?>/wp-content/themes/gwt-wordpress-master/images/seal-govph.png"></a></h1>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar"><a href="#"></a></li>
              </ul>


              <section class="top-bar-section" data-topbar>
                  <ul class="left">
                    <li class="divider"></li>
                    <li><a href="<?php echo get_bloginfo('wpurl') ?>">Home</a></li>
                    <?php wp_nav_menu( array('theme_location'  => 'topbar_left', 'items_wrap' => '<li class="divider"></li>%3$s', 'container' => false, 'walker' => new Topbar_Nav_Menu() )); ?>
                  </ul>
                  <!-- Right Nav Section -->
                  <ul class="right" style="background: rgb(17, 17, 17);">
                    <?php wp_nav_menu( array('theme_location'  => 'topbar_right', 'items_wrap' => '<li class="divider"></li>%3$s', 'container' => false, 'walker' => new Topbar_Nav_Menu() )); ?>
                    <li class="search">
                      <?php get_search_form(); ?>
                    </li>
                    <li class="divider hide-for-small"></li>
                  </ul>
              </section>
            </nav>
        </div>
    </div>
</nav>

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
<div class="container-masthead">
  <div class="row">
    <header class="columns<?php echo $name_slogan_class ?>">
      <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </header>
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


