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

<!-- agency footer -->
<div class="container-footer">
  <div id="supplementary" class="row">
    <div class="large-6 columns widget-area" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
        <aside id="meta" class="widget">
          <h6 class="widget-title"><?php _e( '', 'gwt_wp' ); ?></h6>
        </aside>
      <?php endif; // end sidebar widget area ?>
    </div>

    <div class="large-3 columns widget-area" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
        <aside id="meta" class="widget">
          <h6 class="widget-title"><?php _e( '', 'gwt_wp' ); ?></h6>
        </aside>
      <?php endif; // end sidebar widget area ?>
    </div>

    <div class="large-3 columns widget-area" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
        <aside id="meta" class="widget">
          <h6 class="widget-title"><?php _e( '', 'gwt_wp' ); ?></h6>
        </aside>
      <?php endif; // end sidebar widget area ?>
    </div>
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

<script>
document.write('<script src=' +
('__proto__' in {} ? '<?php  echo get_template_directory_uri() . '/js/vendor/zepto'; ?>' : '<?php  echo get_template_directory_uri() . '/js/vendor/jquery'; ?>') +
'.js><\/script>')
</script>

<?php wp_footer(); ?>

<script>
  jQuery(document).foundation();
</script>

</body>
</html>