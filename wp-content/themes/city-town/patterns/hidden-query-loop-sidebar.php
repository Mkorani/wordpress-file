<?php

/**
 * Title: Hidden Query Loop, Sidebar
 * Slug: city-town/hidden-query-loop-sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Main QL"},"layout":{"type":"default"}} -->
<section class="wp-block-group"><!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10},"layout":{"type":"default"}} -->
  <div class="wp-block-query"><!-- wp:post-template {"className":"is-style-post-template-tf is-style-post-template-1 is-style-post-template-2 is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|48"}},"layout":{"type":"default","columnCount":"1","minimumColumnWidth":null}} -->
    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|32","left":"var:preset|spacing|32"},"padding":{"bottom":"var:preset|spacing|32","top":"var:preset|spacing|32","left":"var:preset|spacing|32","right":"var:preset|spacing|32"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"secondary-100"} -->
    <div class="wp-block-columns are-vertically-aligned-center has-border-color has-secondary-100-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--32);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--32)"><!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3.5","align":"center","className":"is-style-image-shine","style":{"border":{"radius":"12px"}}} /--></div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|16"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
          <div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"","className":"is-style-post-terms"} /--></div>
          <!-- /wp:group -->

          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"constrained"}} -->
          <div class="wp-block-group"><!-- wp:post-title {"isLink":true,"className":"is-style-text-label"} /-->

            <!-- wp:post-excerpt {"excerptLength":12} /-->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
          <div class="wp-block-group"><!-- wp:read-more {"content":"Read More","className":"is-style-default","style":{"border":{"radius":"0px"}},"fontSize":"tiny"} /--></div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"paginationArrow":"arrow","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
    <!-- wp:query-pagination-previous {"label":"Prev"} /-->

    <!-- wp:query-pagination-numbers /-->

    <!-- wp:query-pagination-next {"label":"Next"} /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('No posts were found.', 'city-town'); ?></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
  </div>
  <!-- /wp:query -->

  <!-- wp:spacer {"height":"1px","className":"is-style-spacer-none-up-lg","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|52"}}}} -->
  <div style="margin-bottom:var(--wp--preset--spacing--52);height:1px" aria-hidden="true" class="wp-block-spacer is-style-spacer-none-up-lg"></div>
  <!-- /wp:spacer -->
</section>
<!-- /wp:group -->
