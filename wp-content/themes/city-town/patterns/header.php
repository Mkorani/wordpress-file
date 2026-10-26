<?php

/**
 * Title: Header Default ( City Town )
 * Slug: city-town/header
 * Categories: header, fresh-blog-lite-patterns
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","className":"is-style-default","style":{"border":{"bottom":{"color":"var:preset|color|secondary-100","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-default" style="border-bottom-color:var(--wp--preset--color--secondary-100);border-bottom-width:1px"><!-- wp:group {"className":"is-style-section-6 is-style-section-4","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group is-style-section-6 is-style-section-4" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
      <div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-text-note","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
        <p class="is-style-text-note has-base-color has-text-color has-link-color"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
                                                                                    echo sprintf(esc_html__('%1$sCouncil%2$s', 'city-town'), '<a href="' . esc_url('#!') . '" data-type="internal" data-id="#!">', '</a>'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"is-style-text-note-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
        <p class="is-style-text-note-2 has-base-color has-text-color has-link-color"><?php esc_html_e('/', 'city-town'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"is-style-text-note","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
        <p class="is-style-text-note has-base-color has-text-color has-link-color"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */
                                                                                    echo sprintf(esc_html__('%1$sComplaints%2$s', 'city-town'), '<a href="' . esc_url('#!') . '" data-type="internal" data-id="#!">', '</a>'); ?></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
      <div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="line-height:1"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","className":"is-style-icon-aware-1"} -->
          <figure class="wp-block-image size-full is-resized is-style-icon-aware-1"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/phone-solid.webp" alt="" style="width:16px" /></figure>
          <!-- /wp:image -->

          <!-- wp:paragraph {"className":"is-style-text-note","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
          <p class="is-style-text-note has-base-color has-text-color has-link-color"><?php esc_html_e('+1 561 555 7689', 'city-town'); ?></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"className":"is-style-text-note-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
        <p class="is-style-text-note-2 has-base-color has-text-color has-link-color"><?php esc_html_e('|', 'city-town'); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="line-height:1"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","className":"is-style-icon-aware-1"} -->
          <figure class="wp-block-image size-full is-resized is-style-icon-aware-1"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/icons/envelope-solid.webp" alt="" style="width:16px" /></figure>
          <!-- /wp:image -->

          <!-- wp:paragraph {"className":"is-style-text-note","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
          <p class="is-style-text-note has-base-color has-text-color has-link-color"><?php esc_html_e('info@domain.com', 'city-town'); ?></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->

        <!-- wp:site-title {"level":0,"className":"is-style-text-lead-3"} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
      <div class="wp-block-group"><!-- wp:navigation {"className":"is-style-navigation-basic is-style-navigation-d-medium"} -->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Home', 'city-town'); ?>","url":"<?php echo esc_url(home_url('/')); ?>","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('News', 'city-town'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Events', 'city-town'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('About', 'city-town'); ?>","url":"#!","kind":"custom"} /-->
        <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 'city-town'); ?>","url":"#!","kind":"custom"} /-->
        <!-- /wp:navigation -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
          <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-size-1"} -->
            <div class="wp-block-button is-style-button-size-1"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Report Issue', 'city-town'); ?></a></div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
