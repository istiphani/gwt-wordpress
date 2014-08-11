<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package gwt_wp
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php
// TODO: dynamic class setup
$footer_class = ' large-12';
$footer_class_2 = '';
$footer_class_3 = '';
$footer_class_4 = '';
if(is_active_sidebar('footer-2')){
  $footer_class = ' large-6';
  $footer_class_2 = ' large-6';
  $footer_class_3 = ' large-3';
  $footer_class_4 = ' large-3';
  if(is_active_sidebar('footer-3') && is_active_sidebar('footer-4')){
    $footer_class = ' large-3';
    $footer_class_2 = ' large-3';
  }
  elseif(!is_active_sidebar('footer-3') && is_active_sidebar('footer-4')){
    $footer_class_2 = ' large-3';
    $footer_class_3 = '';
    $footer_class_4 = '';
    $footer_class_4 = ' large-3';
  }
  elseif(is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class_2 = ' large-3';
    $footer_class_3 = ' large-3';
    $footer_class_4 = '';
  }
  elseif(!is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class_2 = ' large-3';
    $footer_class_3 = '';
    $footer_class_4 = '';
  }
}
else{
  $footer_class = ' large-6';
  $footer_class_2 = '';
  $footer_class_3 = ' large-3';
  $footer_class_4 = ' large-3';
  if(!is_active_sidebar('footer-3') && is_active_sidebar('footer-4')){
    $footer_class_3 = ' large-6';
    $footer_class_4 = '';
  }
  elseif(is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class_3 = '';
    $footer_class_4 = ' large-6';
  }
  elseif(!is_active_sidebar('footer-3') && !is_active_sidebar('footer-4')){
    $footer_class = ' large-12';
    $footer_class_3 = '';
    $footer_class_4 = '';
  }
}
?>

<!-- agency footer -->
<div class="container-footer">
  <div id="supplementary" class="row">
    <?php if(is_active_sidebar('footer-1')): ?>
    <div class="columns widget-area<?php echo $footer_class ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-1' ) ?>
    </div>
    <?php endif; // if active footer-1 ?>

    <?php if(is_active_sidebar('footer-2')): ?>
    <div class="columns widget-area<?php echo $footer_class_2 ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-2' ) ?>
    </div>
    <?php endif; // if active footer-2 ?>

    <?php if(is_active_sidebar('footer-3')): ?>
    <div class="columns widget-area<?php echo $footer_class_3 ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-3' ) ?>
    </div>
    <?php endif; // if active footer-3 ?>

    <?php if(is_active_sidebar('footer-4')): ?>
    <div class="columns widget-area<?php echo $footer_class_4 ?>" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php dynamic_sidebar( 'footer-4' ) ?>
    </div>
    <?php endif; // if active footer-4 ?>
  </div>
</div>

<!-- standard footer -->      
    <div id="footer">
      <div class="row">

        <div class="large-4 medium-4 columns">
          <div class="row">
            <div class="large-5 columns">
				<img src="<?php bloginfo('template_url'); ?>/images/govph-seal-mono-footer.png" alt="Seal of the Republic of the Philippines - Monochromatic">
			</div>
            <div class="large-7 columns">
              <h4>Republic of the Philippines</h4>
              <p>All content is in the public domain unless otherwise stated.</p>
              <p><a href="http://www.gov.ph/about-this-website/privacy-policy/">Privacy Policy</a></p>              
            </div>
          </div>
        </div>

        <div class="large-6 medium-6 columns">
          <div class="row">
            <div class="large-5 medium-5 columns">
              <h4>About GOVPH</h4>
              <p>Learn more about the Philippine government, its structure, how government works and the people behind it. </p>
              <ul>
                <li><a href="http://www.gov.ph">Official Gazette</a></li>
                <li><a href="http://data.gov.ph">Open Data Portal</a></li>
              </ul>              
            </div>

            <div class="large-4 medium-4 columns">
              <h4>Government Links</h4>
              <ul>
                <li><a href="http://president.gov.ph">Office of the President</a></li>
                <li><a href="http://ovp.gov.ph">Office of the Vice President</a></li>
                <li><a href="http://www.senate.gov.ph">Senate of the Philippines</a></li>
                <li><a href="http://www.congress.gov.ph">House of Representatives</a></li>
                <li><a href="http://sc.judiciary.gov.ph">Supreme Court</a></li>
                <li><a href="http://ca.judiciary.gov.ph">Court of Appeals</a></li>
                <li><a href="http://sb.judiciary.gov.ph">Sandiganbayan</a></li>
              </ul>              
            </div>            
          </div>
        </div>
          
      </div>
    </div>
<!-- end standard footer -->

<!--script>
document.write('<script src=' +
('__proto__' in {} ? '<?php  echo get_template_directory_uri() . '/js/vendor/zepto'; ?>' : '<?php  echo get_template_directory_uri() . '/js/vendor/jquery'; ?>') +
'.js><\/script>')
</script-->

<?php wp_footer(); ?>

<script type="text/javascript">
(function($) {
	jQuery(document).foundation();
})(jQuery);
</script>

</body>
</html>