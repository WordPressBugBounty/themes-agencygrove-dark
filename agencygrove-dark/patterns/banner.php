<?php
/**
 * Title: Banner
 * Slug: agencygrove-dark/banner
 * Categories: agencygrove-dark
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Banner"},"className":"r-spacing","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"80px"}},"background":{"backgroundSize":"cover","backgroundPosition":"50% 50%"},"dimensions":{"minHeight":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group r-spacing" style="margin-top:0;margin-bottom:80px;padding-top:0px;padding-bottom:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-two.jpg","id":983,"dimRatio":50,"overlayColor":"base-2","isUserOverlayColor":true,"minHeight":650,"sizeSlug":"full","className":"banner-cover","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover banner-cover" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px;min-height:650px"><img class="wp-block-cover__image-background wp-image-983 size-full" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner-two.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-2-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","className":"animate__animated animate__fadeInUp","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center animate__animated animate__fadeInUp" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"53%","style":{"spacing":{"padding":{"bottom":"40px","top":"40px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-bottom:40px;flex-basis:53%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"64px"}}} -->
<h1 class="wp-block-heading" style="font-size:64px"><?php echo esc_html__( 'Smart', 'agencygrove-dark' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'Solutions', 'agencygrove-dark' ); ?></mark> <?php echo esc_html__( 'for a Brighter Future.', 'agencygrove-dark' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0","bottom":"0"}}}} -->
<p style="margin-top:0;margin-bottom:0;padding-top:30px;padding-bottom:30px"><?php echo esc_html__( 'Massa maecenas litora sit tortor facilisi eget dictum tristique curabitur aliquam facilisis mus tellus platea dapibus commodo magna aliquet integer praesent volutpat letius ac elementum lectus Facilisis hac justo nisi dictum sed velit', 'agencygrove-dark' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px","margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"34px","right":"34px","top":"12px","bottom":"12px"}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:12px;padding-right:34px;padding-bottom:12px;padding-left:34px"><?php echo esc_html__( 'Explore More', 'agencygrove-dark' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"contrast","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"width":"2px"},"spacing":{"padding":{"left":"34px","right":"34px","top":"10px","bottom":"10px"}}},"borderColor":"contrast"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color has-border-color has-contrast-border-color wp-element-button" style="border-width:2px;padding-top:10px;padding-right:34px;padding-bottom:10px;padding-left:34px"><?php echo esc_html__( 'Get Started', 'agencygrove-dark' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->