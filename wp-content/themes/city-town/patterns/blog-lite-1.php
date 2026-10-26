<?php

/**
 * Title: Blog Lite 1
 * Slug: city-town/blog-lite-1
 * Categories: posts, fresh-blog-lite-patterns
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Blog Lite"},"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|120"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--120)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"backgroundColor":"c-50","layout":{"type":"default"}} -->
  <div class="wp-block-group alignwide has-c-50-background-color has-background"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group"><!-- wp:heading {"className":"is-style-text-kicker"} -->
        <h2 class="wp-block-heading is-style-text-kicker"><?php esc_html_e('Town Updates', 'city-town'); ?></h2>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|48"}}}} -->
      <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"className":"is-style-text-title-2"} -->
          <h2 class="wp-block-heading is-style-text-title-2"><?php esc_html_e('Get Fresh Perspectives on Life in Our City', 'city-town'); ?></h2>
          <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-text-aware-1 is-style-text-subtitle-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-800"}}}},"textColor":"secondary-800"} -->
          <p class="is-style-text-aware-1 is-style-text-subtitle-2 has-secondary-800-color has-text-color has-link-color"><?php esc_html_e('Dive into articles that showcase developments, share upcoming opportunities, and highlight achievements that shape the growth and character of our city.', 'city-town'); ?></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
      </div>
      <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:query {"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"layout":{"type":"default"}} -->
      <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"335px"}} -->
        <!-- wp:group {"className":"is-style-default","style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"borderColor":"secondary-100","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
        <div class="wp-block-group is-style-default has-border-color has-secondary-100-border-color" style="border-width:1px;border-radius:12px;min-height:100%;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--16)"><!-- wp:group {"className":"is-style-default","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
          <div class="wp-block-group is-style-default"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","align":"center","className":"is-style-image-shine","style":{"border":{"radius":"6px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|12"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"var:preset|spacing|4"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
              <div class="wp-block-group" style="line-height:1"><!-- wp:post-terms {"term":"category","separator":"","className":"is-style-post-terms"} /--></div>
              <!-- /wp:group -->

              <!-- wp:post-title {"isLink":true,"fontSize":"diminutive"} /-->

              <!-- wp:post-excerpt {"excerptLength":10} /-->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6","padding":{"top":"var:preset|spacing|16"}},"border":{"top":{"color":"var:preset|color|secondary-200","style":"dotted","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
          <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary-200);border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--16)"><!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="line-height:1"><!-- wp:avatar {"size":24,"isLink":true} /-->

              <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
              <div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"fontSize":"minute"} /--></div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"var:preset|spacing|4"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="line-height:1"><!-- wp:post-date {"format":"M j, Y","isLink":true,"fontSize":"minute"} /--></div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
