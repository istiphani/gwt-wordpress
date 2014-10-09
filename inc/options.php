<?php
/**
 * The template for displaying the theme options page.
 *
 * @package gwt_wp
 */
class GOVPH
{
  public $options;

  public function __construct()
  {
    $this->options = get_option('govph_options');
    $this->register_settings_fields();
  }

  public static function add_menu_page()
  {
    add_theme_page('Theme Options', 'Theme Options', 'administrator', 'govph-options', array('GOVPH', 'govph_options_page'),6);
  }

  public function govph_options_page()
  {
  ?>
  <div class="wrap">
    <?php screen_icon(); ?>
    <h2>Theme Options Page</h2>
    <form action="options.php" method="post" enctype="multipart/form-data">
      <?php settings_fields('govph_options') ?>
      <?php do_settings_sections(__FILE__); ?>

      <p class="class">
        <input id="submit" name="submit" type="submit" class="button-primary" value="Save Changes">
      </p>
    </form>

  </div>
  <script type="text/javascript">
  jQuery(document).ready(function($){


      var custom_uploader;


      $('.my-color-field').wpColorPicker();
      $('form').find('input#upload_image_button').on('click', function(e){
        e.preventDefault();

        var $this = $(this),
          prevInput = $(this).prev();

        console.log(prevInput);

          if (custom_uploader) {
              custom_uploader.open();
              return;
          }


          custom_uploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Choose Image'
              },
              multiple: false
          });

          custom_uploader.on('select', function() {
              attachment = custom_uploader.state().get('selection').first().toJSON();
              prevInput.val(attachment.url);
              console.log(prevInput.val());
          });

          custom_uploader.open();

      });
      $('form').find('input#header_image_background_button').on('click', function(e){
        e.preventDefault();

        var $this = $(this),
          prevInput = $(this).prev();

        console.log(prevInput);

          if (custom_uploader) {
              custom_uploader.open();
              return;
          }


          custom_uploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Choose Image'
              },
              multiple: false
          });

          custom_uploader.on('select', function() {
              attachment = custom_uploader.state().get('selection').first().toJSON();
              prevInput.val(attachment.url);
              console.log(prevInput.val());
          });

          custom_uploader.open();

      });
      $('form').find('input#slider_image_background_button').on('click', function(e){
        e.preventDefault();

        var $this = $(this),
          prevInput = $(this).prev();

        console.log(prevInput);

          if (custom_uploader) {
              custom_uploader.open();
              return;
          }


          custom_uploader = wp.media.frames.file_frame = wp.media({
              title: 'Choose Image',
              button: {
                  text: 'Choose Image'
              },
              multiple: false
          });

          custom_uploader.on('select', function() {
              attachment = custom_uploader.state().get('selection').first().toJSON();
              prevInput.val(attachment.url);
              console.log(prevInput.val());
          });

          custom_uploader.open();

      });
  });
  </script>
  <?php
  }

  public function register_settings_fields()
  {
    register_setting('govph_options','govph_options');
    add_settings_section('govph_main_section', '', array($this, 'govph_main_section_cb'), __FILE__);
    add_settings_field('govph_mainmenu', 'Main Menu', array($this, 'govph_mainmenu'), __FILE__, 'govph_main_section');
    add_settings_field('govph_logo_position', 'Logo Position', array($this, 'govph_logo_position_setting'), __FILE__, 'govph_main_section');
    add_settings_field('govph_logo', 'Image Logo', array($this, 'govph_logo_setting'), __FILE__, 'govph_main_section');
    add_settings_field('govph_headercolor', 'Header Background Color', array($this, 'govph_header_color_setting'), __FILE__, 'govph_main_section');
    add_settings_field('govph_headerimage', 'Header Background Image', array($this, 'govph_header_image_setting'), __FILE__, 'govph_main_section');
    add_settings_field('govph_slidercolor', 'Slider Background Color', array($this, 'govph_slider_color_setting'), __FILE__, 'govph_main_section');
    add_settings_field('govph_sliderimage', 'Slider Background Image', array($this, 'govph_slider_image_setting'), __FILE__, 'govph_main_section');
    //add_settings_field('govph_slider_fullwidth', 'Slider Full Width', array($this, 'govph_slider_fullwidth'), __FILE__, 'govph_main_section');
    add_settings_field('govph_anchorcolor', 'Anchor Color Settings', array($this, 'govph_anchor_color_setting'), __FILE__, 'govph_main_section');
    add_settings_field('govph_sidebar_position', 'Sidebar Settings', array($this, 'govph_sidebar_position'), __FILE__, 'govph_main_section');

  }

  public function govph_main_section_cb()
  {

  }

  public function govph_gallery_section_cb()
  {

  }

  // public function govph_validate_settings($plugin_options)
  // {
  //  if (!empty($_FILES['govph_options']['tmp_name'])) {
  //    $overide = array('test_form' => false);
  //    $file = wp_handle_upload($_FILES['govph_options'], $overide);
  //    var_dump($file);
  //    die();

  //  }
  // }

  /*
   * Inputs
   */

  //Main Section
  public function govph_mainmenu()
  {
    $true = ($this->options['govph_mainmenu'] == 'true' ? "checked" : "");
  ?>
    <input type="checkbox" name="govph_options[govph_mainmenu]" value="true" <?php echo $true ?>>
    <span class="description">Check to display Auxiliary Menu</span>
  <?php
  }

  public function govph_logo_position_setting()
  {
  ?>
    <?php
      $left = ($this->options['govph_logo_position'] == 'left' ? "checked" : "");
      $center = ($this->options['govph_logo_position'] == 'center' ? "checked" : "");
    ?>
    <input type="radio" name="govph_options[govph_logo_position]" value="left" <?php echo $left ?>> Left <br>
    <input type="radio" name="govph_options[govph_logo_position]" value="center" <?php echo $center ?>> Center
  <?php
  }

  public function govph_logo_setting()
  {
  ?>
    <label for="upload_image">
        <input id="upload_image" type="text" size="36" name="govph_options[govph_logo]" value="<?php echo $this->options['govph_logo']; ?>" />
        <input id="upload_image_button" class="button" type="button" value="Upload Logo" />
        <br /><p class="description">Enter a URL or upload an image</p>
    </label>

  <?php
    if (!empty($this->options['govph_logo'])) {
      echo '<br/><img src="'.$this->options['govph_logo'].'" height="100px" alt="" style="background: #ddd; padding: 10px;">';
    }
  }

  public function govph_header_color_setting()
  {
    ?>
    <input name="govph_options[govph_headercolor]" type="text" value="<?php echo $this->options['govph_headercolor']; ?>" class="my-color-field" data-default-color="#142745" />
    <?php
  }

  public function govph_header_image_setting()
  {
    ?>
    <label for="header_image_background">
        <input id="header_image_background" type="text" size="36" name="govph_options[govph_headerimage]" value="<?php echo $this->options['govph_headerimage']; ?>" />
        <input id="header_image_background_button" class="button" type="button" value="Upload Image" />
        <br /><p class="description">Enter a URL or upload an image for header background</p>
    </label>
    <?php
      if (!empty($this->options['govph_headerimage'])) {
        echo '<br/><img src="'.$this->options['govph_headerimage'].'" height="100px" alt="" style="background: #ddd; padding: 10px;">';
      }
  }

  public function govph_slider_color_setting()
  {
  ?>
    <input name="govph_options[govph_slidercolor]" type="text" value="<?php echo $this->options['govph_slidercolor']; ?>" class="my-color-field" data-default-color="#1f3a70" />
  <?php
  }
  
    public function govph_slider_image_setting()
  {
    ?>
    <label for="slider_image_background">
        <input id="slider_image_background" type="text" size="36" name="govph_options[govph_sliderimage]" value="<?php echo $this->options['govph_sliderimage']; ?>" />
        <input id="slider_image_background_button" class="button" type="button" value="Upload Image" />
        <br /><p class="description">Enter a URL or upload an image for header background</p>
    </label>
    <?php
      if (!empty($this->options['govph_sliderimage'])) {
        echo '<br/><img src="'.$this->options['govph_sliderimage'].'" height="200px" alt="" style="background: #ddd; padding: 10px;">';
      }
  }

  public function govph_slider_fullwidth()
  {
    $true = ($this->options['govph_slider_fullwidth'] == 'true' ? "checked" : "");
  ?>
    <input type="checkbox" name="govph_options[govph_slider_fullwidth]" value="true" <?php echo $true ?>>
  <?php
  }


  public function govph_anchor_color_setting()
  {
  ?>
    <input name="govph_options[govph_anchorcolor]" type="text" value="<?php echo $this->options['govph_anchorcolor']; ?>" class="my-color-field" data-default-color="#2795b6" />
  <?php
  }

  public function govph_sidebar_position()
  {
  ?>
    <?php
      $left = ($this->options['govph_sidebar_position'] == 'left' ? "checked" : "");
      $right = ($this->options['govph_sidebar_position'] == 'right' ? "checked" : "");
      $both = ($this->options['govph_sidebar_position'] == 'both' ? "checked" : "");
      $fullwidth = ($this->options['govph_sidebar_position'] == 'fullwidth' ? "checked" : "");
    ?>
    <input type="radio" name="govph_options[govph_sidebar_position]" value="left" <?php echo $left ?>> Left <br>
    <input type="radio" name="govph_options[govph_sidebar_position]" value="right" <?php echo $right ?>> Right <br>
    <input type="radio" name="govph_options[govph_sidebar_position]" value="both" <?php echo $both ?>> Both <br>
    <input type="radio" name="govph_options[govph_sidebar_position]" value="fullwidth" <?php echo $fullwidth ?>> Full Width
  <?php
  }
}



add_action('admin_menu', 'govph_options_menu');
function govph_options_menu(){
  GOVPH::add_menu_page();
}

add_action('admin_init', 'govph_options_init');
function govph_options_init(){
  new GOVPH();
}

if (is_admin()) { add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' ); }
function mw_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_media();
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', get_template_directory_uri() . '/js/color.js', array( 'wp-color-picker' ), false, true );
}

function govph_displayoptions( $options ){
  $option = get_option('govph_options');

  $addLogo = (!empty($option['govph_logo']) ? 'background: url('.$option['govph_logo'].') no-repeat;' : '');
  $logoPos = (!empty($option['govph_logo_position']) ? 'background-position:top '.$option['govph_logo_position'].';' : '');
  $headerBg = (!empty($option['govph_headercolor']) ? 'background-color:'.$option['govph_headercolor'].';' : '');
  $headerImg = (!empty($option['govph_headerimage']) ? 'background-image:url("'.$option['govph_headerimage'].'");' : '');
  $sliderBg = (!empty($option['govph_slidercolor']) ? 'background-color:'.$option['govph_slidercolor'].';' : '');
  $sliderImg = (!empty($option['govph_sliderimage']) ? 'background-image:url("'.$option['govph_sliderimage'].'");background-size:cover;' : '');
  $anchorColor = (!empty($option['govph_anchorcolor']) ? 'color:'.$option['govph_anchorcolor'].' !important;' : '');

  // print_r($options[govph_headercolor]);
  switch ($options) {
      case 'govph_mainmenu':
          if ($option['govph_mainmenu'] === 'true') {
            ?>
            <nav id="main-nav" class="container-topbar">
              <div class="row">
                  <div class="small-12 large-12 columns toplayer">
                      <nav class="top-bar nomargin" style="">
                        <section class="top-bar-section">
                            <ul>
                              <?php wp_nav_menu( array('theme_location'  => 'main_nav', 'items_wrap' => '<li class="divider"></li>%3$s', 'container' => false, 'walker' => new Topbar_Nav_Menu() )); ?>
                            </ul>
                        </section>
                      </nav>
                  </div>
              </div>
          </nav>
          <?php
          }
          break;
      case 'govph_logo':
          echo $addLogo;
          break;
      case 'govph_logo_position':
          echo $logoPos;
          break;
      case 'govph_headercolor':
          echo $headerBg;
          break;
      case 'govph_headerimage':
          echo $headerImg;
          break;
      case 'govph_slidercolor':
          echo $sliderBg;
          break;
      case 'govph_sliderimage':
          echo $sliderImg;
          break;
      case 'govph_anchorcolor':
          echo $anchorColor;
          break;
      case 'govph_sidebar_position':
          if ($option['govph_sidebar_position'] === 'both') {
            echo 'large-3 ';
          } else {
            echo 'large-4 ';
          }
          break;
      case 'govph_sidebar_left':
          if ($option['govph_sidebar_position'] === 'left' || $option['govph_sidebar_position'] === 'both') {
            get_sidebar('left');
          }
          break;
      case 'govph_sidebar_right':
          if ($option['govph_sidebar_position'] === 'right' || $option['govph_sidebar_position'] === 'both') {
            get_sidebar('right');
          }
          break;
      case 'govph_content_position':
          if ($option['govph_sidebar_position'] === 'both') {
            echo 'large-6 ';
          } elseif ($option['govph_sidebar_position'] === 'fullwidth') {
            echo 'large-12 ';
          } else {
            echo 'large-8 ';
          }
          break;
      case 'govph_slider_start':
          if ($option['govph_slider_fullwidth'] != 'true') {
            echo '<div class="row"><div class="large-12 columns govph-flexslider">';
          }
          break;
      case 'govph_slider_end':
          if ($option['govph_slider_fullwidth'] != 'true') {
            echo '</div></div>';
          }
          break;
  }
 }
