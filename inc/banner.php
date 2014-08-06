
?>
<?php

if (is_home()){

  $banner_class = ' large-12';
  $banner_2_class = '';
  $banner_3_class = '';
  // if both banner are available
  if(is_active_sidebar('banner-section-1') && is_active_sidebar('banner-section-2')){
    $banner_class = ' large-6';
    $banner_2_class = ' large-3';
    $banner_3_class = ' large-3';
  }
  elseif(is_active_sidebar('banner-section-1') && !is_active_sidebar('banner-section-2')){
    $banner_class = ' large-8';
    $banner_2_class = ' large-4';
    //$banner_3_class = '';
  }
  elseif(!is_active_sidebar('banner-section-1') && is_active_sidebar('banner-section-2')){
    $banner_class = ' large-9';
    //$banner_2_class = '';
    $banner_3_class = ' large-3';
  }
  $banner_class .= ' show-for-medium-up';

}

?>
<div class="container-banner">
    <?php govph_displayoptions( 'govph_slider_start' ); ?>

        <?php if (is_home()): ?>
          <?php if(is_active_sidebar('banner-section-1')): ?>
            <div class="row collapse">
          <?php endif; ?>

          <?php if($banner_slider = efs_get_slider()): ?>
            <div class="<?php echo $banner_class ?> columns">
            <?php echo $banner_slider ?>
            </div>
          <?php endif; ?>

          <?php if(is_active_sidebar('banner-section-1')): ?>
            <div class="<?php echo $banner_2_class ?> columns">
            <?php do_action( 'before_sidebar' ); ?>
            <?php dynamic_sidebar( 'banner-section-1' ) ?>
            </div>
          <?php endif; ?>

          <?php if(is_active_sidebar('banner-section-2')): ?>
            <div class="<?php echo $banner_3_class ?> columns">
            <?php do_action( 'before_sidebar' ); ?>
            <?php dynamic_sidebar( 'banner-section-2' ) ?>
            </div>
          <?php endif; ?>
          <?php if(is_active_sidebar('banner-section-1') || is_active_sidebar('banner-section-2')): ?>
            </div><!-- closing row -->
          <?php endif; ?>
        <?php else: ?>
          <?php if (is_404()): ?>
            <div class="row">
              <div class="nine columns">
                <header>
                  <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'gwt_wp' ); ?></h1>
                </header>
              </div>
            </div>
          <?php elseif (is_search()): ?>
            <div class="row">
              <div class="nine columns">
                <header>
                  <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'gwt_wp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header>
              </div>
            </div>
          <?php elseif (is_archive()): ?>
            <div class="row">
              <div class="nine columns">
                <header>
                  <h1 class="page-title">
                    <?php
                      if ( is_category() ) :
                        single_cat_title();

                      elseif ( is_tag() ) :
                        single_tag_title();

                      elseif ( is_author() ) :
                        /* Queue the first post, that way we know
                         * what author we're dealing with (if that is the case).
                        */
                        the_post();
                        printf( __( 'Author: %s', 'gwt_wp' ), '<span class="vcard">' . get_the_author() . '</span>' );
                        /* Since we called the_post() above, we need to
                         * rewind the loop back to the beginning that way
                         * we can run the loop properly, in full.
                         */
                        rewind_posts();

                      elseif ( is_day() ) :
                        printf( __( 'Day: %s', 'gwt_wp' ), '<span>' . get_the_date() . '</span>' );

                      elseif ( is_month() ) :
                        printf( __( 'Month: %s', 'gwt_wp' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

                      elseif ( is_year() ) :
                        printf( __( 'Year: %s', 'gwt_wp' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

                      elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                        _e( 'Asides', 'gwt_wp' );

                      elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                        _e( 'Images', 'gwt_wp');

                      elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                        _e( 'Videos', 'gwt_wp' );

                      elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                        _e( 'Quotes', 'gwt_wp' );

                      elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                        _e( 'Links', 'gwt_wp' );

                      else :
                        _e( 'Archives', 'gwt_wp' );

                      endif;
                    ?>
                  </h1>
                  <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                      printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                  ?>
                </header>
              </div>
            </div>
          <?php else: ?>
            <div class="row">
              <div class="nine columns">
                <header>
                <?php while ( have_posts() ) : the_post(); ?>
                  <h1 class="entry-title"><?php the_title(); ?></h1>
                  <div class="entry-meta">
                    <?php gwt_wp_posted_on(); ?>
                  </div><!-- .entry-meta -->

                <?php endwhile; // end of the loop. ?>

                </header>
              </div>
            </div>
          <?php endif ?>
        <?php endif ?>
<?php govph_displayoptions( 'govph_slider_end' ); ?>
</div>

<?php govph_displayoptions( 'govph_mainmenu' ); ?>