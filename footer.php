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

<div class="container-footer">
  <div id="supplementary" class="row">
    <div class="large-6 columns widget-area" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
        <aside id="meta" class="widget">
          <h6 class="widget-title"><?php _e( 'Agency Footer 1', 'gwt_wp' ); ?></h6>
          <p>This widget area is empty!</p>
          <p>go to widget area and add widget to "Agency Footer 1"</p>
        </aside>
      <?php endif; // end sidebar widget area ?>
    </div>

    <div class="large-3 columns widget-area" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
        <aside id="meta" class="widget">
          <h6 class="widget-title"><?php _e( 'Agency Footer 2', 'gwt_wp' ); ?></h6>
          <p>This widget area is empty!</p>
          <p>go to widget area and add widget to "Agency Footer 2"</p>
        </aside>
      <?php endif; // end sidebar widget area ?>
    </div>

    <div class="large-3 columns widget-area" role="complementary">
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
        <aside id="meta" class="widget">
          <h6 class="widget-title"><?php _e( 'Agency Footer 3', 'gwt_wp' ); ?></h6>
          <p>This widget area is empty!</p>
          <p>go to widget area and add widget to "Agency Footer 3"</p>
        </aside>
      <?php endif; // end sidebar widget area ?>
    </div>
  </div>
</div>

<div class="container-footer-govph">
  <div class="row">

    <div class="large-4 columns widget-area push-8" role="complementary">
    <article id="image-3" class="widget widget_image"><div class="footer-section"><div class="jetpack-image-container"><img class="seal-mono" src="<?php bloginfo('template_url'); ?>/images/govph-seal-mono-footer.png" alt="Seal of the Republic of the Philippines - Monochromatic" title="Seal of the Republic of the Philippines - Monochromatic" class="aligncenter" width="280" height="280"><p style="text-align:center;">All content is public domain unless otherwise stated.</p></div>
    </div></article>
    </div>

  <div class="large-3 columns widget-area pull-4" role="complementary">
    <article id="nav_menu-3" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Republic of the Philippines</strong></h6><div class="menu-national-government-portal-container"><ul id="menu-national-government-portal" class="menu"><li id="menu-item-786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-786"><a href="http://www.gov.ph">Official Gazette</a></li>
    <li id="menu-item-787" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-787"><a href="http://president.gov.ph">Office of the President</a></li>
    <li id="menu-item-3236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3236"><a href="http://www.gov.ph/directory/">Official Directory</a></li>
    <li id="menu-item-3235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3235"><a href="http://www.gov.ph/calendar/">Official Calendar</a></li>
    </ul></div></div></article><article id="nav_menu-7" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Resources</strong></h6><div class="menu-links-resources-container"><ul id="menu-links-resources" class="menu"><li id="menu-item-3294" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3294"><a href="http://noah.dost.gov.ph/">Project NOAH</a></li>
    </ul></div></div></article>
  </div>

  <div class="large-3 columns widget-area pull-6" role="complementary">
    <article id="nav_menu-4" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Executive</strong></h6><div class="menu-links-executive-container"><ul id="menu-links-executive" class="menu"><li id="menu-item-3237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3237"><a href="http://www.president.gov.ph">Office of the President</a></li>
    <li id="menu-item-3238" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3238"><a href="http://www.ovp.gov.ph">Office of the Vice President</a></li>
    <li id="menu-item-3239" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3239"><a href="http://www.deped.gov.ph">Department of Education</a></li>
    <li id="menu-item-3241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3241"><a href="http://www.dilg.gov.ph">Department of Interior and Local Government</a></li>
    <li id="menu-item-3240" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3240"><a href="http://www.dof.gov.ph">Department of Finance</a></li>
    <li id="menu-item-3242" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3242"><a href="http://www.doh.gov.ph">Department of Health</a></li>
    <li id="menu-item-3293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3293"><a href="http://www.dost.gov.ph/">Department of Science and Technology</a></li>
    <li id="menu-item-3296" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3296"><a href="http://www.dti.gov.ph/">Department of Trade and Industry</a></li>
    </ul></div></div></article><article id="nav_menu-6" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Legislative</strong></h6><div class="menu-links-legislative-container"><ul id="menu-links-legislative" class="menu"><li id="menu-item-3248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3248"><a href="http://www.senate.gov.ph/">Senate of the Philippines</a></li>
    <li id="menu-item-3249" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3249"><a href="http://www.congress.gov.ph/">House of Representatives</a></li>
    </ul></div></div></article><article id="nav_menu-5" class="widget widget_nav_menu"><div class="footer-section"><h6><strong>Judiciary</strong></h6><div class="menu-links-judiciary-container"><ul id="menu-links-judiciary" class="menu"><li id="menu-item-3243" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3243"><a href="http://sc.judiciary.gov.ph/">Supreme Court</a></li>
    <li id="menu-item-3244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3244"><a href="http://ca.judiciary.gov.ph/">Court of Appeals</a></li>
    <li id="menu-item-3245" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3245"><a href="http://sb.judiciary.gov.ph/">Sandiganbayan</a></li>
    <li id="menu-item-3246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3246"><a href="http://cta.judiciary.gov.ph/">Court of Tax Appeals</a></li>
    <li id="menu-item-3247" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3247"><a href="http://jbc.judiciary.gov.ph/">Judicial Bar and Council</a></li>
    </ul></div></div></article>
  </div>
  </div>
</div>

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