<?php
/**
 *
 * Adds custom Block Patterns to the post/page editor.
 *
 * see: https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/
 *
 * @package Cordero
 */


register_block_pattern_category(
	'cordero-theme',
	array( 'label' => __( 'Cordero', 'cordero' ) )
);


register_block_pattern_category(
	'cordero-theme-wc',
	array( 'label' => __( 'Cordero - Products', 'cordero' ) )
);


if ( class_exists( 'WooCommerce' ) ) {
	register_block_pattern(
		'cordero/cover-and-products',
		array(
			'title'			=> __( 'Cover and Products', 'cordero' ),
			'description'	=> _x( 'Two columns with a cover image to the left, and latest products on the right.', 'Block pattern description', 'cordero' ),

			'content'		=> '<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/square-image-01.jpg' ) ) . '","className":"equal-height"} -->
<div class="wp-block-cover has-background-dim equal-height" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/square-image-01.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size">' . _x( 'Example Heading', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit, auctor etiam eu scelerisque nunc sociosqu mus felis, non eleifend porta imperdiet fermentum nullam elementum.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/product-new {"columns":2,"rows":2} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',

			'viewportWidth'	=> 1400,
			'categories'	=> array( 'cordero-theme-wc' ),
		)
	);
}


register_block_pattern(
	'cordero/hero-with-buttons-1',
	array(
		'title'			=> __( 'Hero with Two Buttons', 'cordero' ),
		'description'	=> _x( 'A large full width hero cover with a title, sub-title, and two buttons.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/cover-background.jpg' ) ) . '","hasParallax":true,"dimRatio":80,"gradient":"cool-to-warm-spectrum","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-background-dim has-parallax has-background-gradient" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/cover-background.jpg' ) ) . ')"><span aria-hidden="true" class="wp-block-cover__gradient-background has-cool-to-warm-spectrum-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">' . _x( 'Example Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"backgroundColor":"accent-color2"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color-2-background-color has-background">' . _x( 'Read More', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button -->

<!-- wp:button {"customBackgroundColor":"#ffffff","textColor":"accent-color2","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-accent-color-2-color has-text-color has-background" style="background-color:#ffffff">' . _x( 'Get In Touch', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->',

		'viewportWidth'	=> 1000,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/features',
	array(
		'title'			=> __( 'Image and Features', 'cordero' ),
		'description'	=> _x( 'Three features with an image.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container">

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">' . _x( 'Example Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:separator {"color":"accent-color","className":"small"} -->
<hr class="wp-block-separator has-text-color has-background has-accent-color-background-color has-accent-color-color small"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:media-text {"mediaLink":"' . esc_url( get_theme_file_uri( 'images/media-text-image.jpg' ) ) . '","mediaType":"image","imageFill":false,"className":"features-media-text"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile features-media-text"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/media-text-image.jpg' ) ) . '" alt="" class=""/></figure><div class="wp-block-media-text__content"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="' . esc_url( get_theme_file_uri( 'images/icon-settings-dark.png' ) ) . '" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"accent-color2"} -->
<h3 class="has-accent-color-2-color has-text-color">' . _x( 'Feature One', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="' . esc_url( get_theme_file_uri( 'images/icon-camera-dark.png' ) ) . '" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"accent-color2"} -->
<h3 class="has-accent-color-2-color has-text-color">' . _x( 'Feature Two', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image -->
<figure class="wp-block-image"><img src="' . esc_url( get_theme_file_uri( 'images/icon-rocket-dark.png' ) ) . '" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"textColor":"accent-color2"} -->
<h3 class="has-accent-color-2-color has-text-color">' . _x( 'Feature Three', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:media-text -->

</div></div>
<!-- /wp:group -->',

		'viewportWidth'	=> 1000,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/offset-feature-columns',
	array(
		'title'			=> __( 'Offset Feature Columns', 'cordero' ),
		'description'	=> _x( 'Four offset columns with overlay background images.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:columns {"className":"with-offset without-gaps"} -->
<div class="wp-block-columns with-offset without-gaps"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/column-bg-01.jpg' ) ) . '","overlayColor":"vivid-red","contentPosition":"top left"} -->
<div class="wp-block-cover has-vivid-red-background-color has-background-dim has-custom-content-position is-position-top-left" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/column-bg-01.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3>' . _x( 'One', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-offset"} -->
<div class="wp-block-column has-offset"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/column-bg-02.jpg' ) ) . '","overlayColor":"vivid-green-cyan","contentPosition":"top left"} -->
<div class="wp-block-cover has-vivid-green-cyan-background-color has-background-dim has-custom-content-position is-position-top-left" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/column-bg-02.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3>' . _x( 'Two', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/column-bg-03.jpg' ) ) . '","overlayColor":"luminous-vivid-amber","contentPosition":"top left"} -->
<div class="wp-block-cover has-luminous-vivid-amber-background-color has-background-dim has-custom-content-position is-position-top-left" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/column-bg-03.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3>' . _x( 'Three', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-offset"} -->
<div class="wp-block-column has-offset"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/column-bg-04.jpg' ) ) . '","overlayColor":"vivid-cyan-blue","contentPosition":"top left"} -->
<div class="wp-block-cover has-vivid-cyan-blue-background-color has-background-dim has-custom-content-position is-position-top-left" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/column-bg-04.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3>' . _x( 'Four', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',

		'viewportWidth'	=> 1000,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/cta-two-images',
	array(
		'title'			=> __( 'Call-to-action with images', 'cordero' ),
		'description'	=> _x( 'A call-to-action with two images.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:columns {"className":"cta-with-images"} -->
<div class="wp-block-columns cta-with-images"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="' . esc_url( get_theme_file_uri( 'images/square-image-01.jpg' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"align":"center","textColor":"accent-color2"} -->
<h2 class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Example Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( 'Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit, auctor etiam eu scelerisque nunc sociosqu mus felis, non eleifend porta imperdiet fermentum nullam elementum.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="' . esc_url( get_theme_file_uri( 'images/square-image-02.jpg' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',

		'viewportWidth'	=> 1400,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/food-menu-images',
	array(
		'title'			=> __( 'Food menu with background images', 'cordero' ),
		'description'	=> _x( 'A food menu with background image for each item.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container">

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">' . _x( 'Menu Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"medium"} -->
<hr class="wp-block-separator medium"/>
<!-- /wp:separator -->

<!-- wp:columns {"className":"food-menu"} -->
<div class="wp-block-columns food-menu"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/food-item-01.jpg' ) ) . '","overlayColor":"accent-color2"} -->
<div class="wp-block-cover has-accent-color-2-background-color has-background-dim" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/food-item-01.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">' . _x( 'Item One', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","fontSize":"large"} -->
<p class="has-text-align-right has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/food-item-02.jpg' ) ) . '","overlayColor":"accent-color2"} -->
<div class="wp-block-cover has-accent-color-2-background-color has-background-dim" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/food-item-02.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">' . _x( 'Item Two', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","fontSize":"large"} -->
<p class="has-text-align-right has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/food-item-03.jpg' ) ) . '","overlayColor":"accent-color2"} -->
<div class="wp-block-cover has-accent-color-2-background-color has-background-dim" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/food-item-03.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">' . _x( 'Item Three', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","fontSize":"large"} -->
<p class="has-text-align-right has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/food-item-04.jpg' ) ) . '","overlayColor":"accent-color2"} -->
<div class="wp-block-cover has-accent-color-2-background-color has-background-dim" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/food-item-04.jpg' ) ) . ')"><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">' . _x( 'Item Four', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","fontSize":"large"} -->
<p class="has-text-align-right has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div></div>
<!-- /wp:group -->',

		'viewportWidth'	=> 1400,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/food-menu-images-2',
	array(
		'title'			=> __( 'Food menu with images', 'cordero' ),
		'description'	=> _x( 'A food menu with an image for each item.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container">

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">' . _x( 'Menu Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"medium"} -->
<hr class="wp-block-separator medium"/>
<!-- /wp:separator -->

<!-- wp:media-text {"mediaLink":"' . esc_url( get_theme_file_uri( 'images/food-item-01.jpg' ) ) . '","mediaType":"image","verticalAlignment":"center","className":"food-menu-item","backgroundColor":"accent-color3"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center food-menu-item has-accent-color-3-background-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/food-item-01.jpg' ) ) . '" alt="" class=""/></figure><div class="wp-block-media-text__content"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"accent-color2","fontSize":"large"} -->
<p class="has-accent-color-2-color has-text-color has-large-font-size">' . _x( 'Item One', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","textColor":"accent-color2","fontSize":"large"} -->
<p class="has-text-align-right has-accent-color-2-color has-text-color has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"color":"accent-color","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-accent-color-background-color has-accent-color-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . esc_url( get_theme_file_uri( 'images/food-item-02.jpg' ) ) . '","mediaType":"image","verticalAlignment":"center","className":"food-menu-item","backgroundColor":"accent-color3"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center food-menu-item has-accent-color-3-background-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/food-item-02.jpg' ) ) . '" alt="" class=""/></figure><div class="wp-block-media-text__content"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"accent-color2","fontSize":"large"} -->
<p class="has-accent-color-2-color has-text-color has-large-font-size">' . _x( 'Item Two', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","textColor":"accent-color2","fontSize":"large"} -->
<p class="has-text-align-right has-accent-color-2-color has-text-color has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"color":"accent-color","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-accent-color-background-color has-accent-color-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaLink":"' . esc_url( get_theme_file_uri( 'images/food-item-03.jpg' ) ) . '","mediaType":"image","verticalAlignment":"center","className":"food-menu-item","backgroundColor":"accent-color3"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center food-menu-item has-accent-color-3-background-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/food-item-03.jpg' ) ) . '" alt="" class=""/></figure><div class="wp-block-media-text__content"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"accent-color2","fontSize":"large"} -->
<p class="has-accent-color-2-color has-text-color has-large-font-size">' . _x( 'Item Three', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","textColor":"accent-color2","fontSize":"large"} -->
<p class="has-text-align-right has-accent-color-2-color has-text-color has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"color":"accent-color","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-accent-color-background-color has-accent-color-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . esc_url( get_theme_file_uri( 'images/food-item-04.jpg' ) ) . '","mediaType":"image","verticalAlignment":"center","className":"food-menu-item","backgroundColor":"accent-color3"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center food-menu-item has-accent-color-3-background-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/food-item-04.jpg' ) ) . '" alt="" class=""/></figure><div class="wp-block-media-text__content"><!-- wp:columns {"className":"food-menu-item"} -->
<div class="wp-block-columns food-menu-item"><!-- wp:column {"width":66.66} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"accent-color2","fontSize":"large"} -->
<p class="has-accent-color-2-color has-text-color has-large-font-size">' . _x( 'Item Four', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":33.33} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"align":"right","textColor":"accent-color2","fontSize":"large"} -->
<p class="has-text-align-right has-accent-color-2-color has-text-color has-large-font-size">' . _x( '$34', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"color":"accent-color","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-accent-color-background-color has-accent-color-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph -->
<p>' . _x( 'Lorem ipsum dolor sit amet consectetur. Dictum tellus eleifend varius eros.', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

</div></div>
<!-- /wp:group -->',

		'viewportWidth'	=> 1400,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/featured-services-1',
	array(
		'title'			=> __( 'Featured Services', 'cordero' ),
		'description'	=> _x( 'Three featured services.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container">

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">' . _x( 'Example Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"featured-style-1"} -->
<div class="wp-block-columns featured-style-1"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"cordero-featured-service","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-cordero-featured-service"><img src="' . esc_url( get_theme_file_uri( 'images/icon-settings-light.png' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3,"textColor":"accent-color2"} -->
<h3 class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Feature One', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent-color2"} -->
<p class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Read More', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"cordero-featured-service","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-cordero-featured-service"><img src="' . esc_url( get_theme_file_uri( 'images/icon-camera-light.png' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3,"textColor":"accent-color2"} -->
<h3 class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Feature Two', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent-color2"} -->
<p class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Read More', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"cordero-featured-service","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-cordero-featured-service"><img src="' . esc_url( get_theme_file_uri( 'images/icon-rocket-light.png' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3,"textColor":"accent-color2"} -->
<h3 class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Feature Three', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent-color2"} -->
<p class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Read More', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div></div>
<!-- /wp:group -->',

		'viewportWidth'	=> 1400,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/featured-services-1-overlap',
	array(
		'title'			=> __( 'Cover and Overlapped Featured Services', 'cordero' ),
		'description'	=> _x( 'A full width cover block and three overlapped featured services.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><div class="wp-block-group__inner-container">

<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/cover-background.jpg' ) ) . '","hasParallax":true,"dimRatio":80,"gradient":"cool-to-warm-spectrum","align":"full","className":"has-overlap"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-background-dim has-parallax has-background-gradient has-overlap" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/cover-background.jpg' ) ) . ')"><span aria-hidden="true" class="wp-block-cover__gradient-background has-cool-to-warm-spectrum-gradient-background"></span><div class="wp-block-cover__inner-container">

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">' . _x( 'Example Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"className":"featured-style-1 overlap"} -->
<div class="wp-block-columns featured-style-1 overlap"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"cordero-featured-service","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-cordero-featured-service"><img src="' . esc_url( get_theme_file_uri( 'images/icon-settings-light.png' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3,"textColor":"accent-color2"} -->
<h3 class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Feature One', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent-color2"} -->
<p class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Read More', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"cordero-featured-service","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-cordero-featured-service"><img src="' . esc_url( get_theme_file_uri( 'images/icon-camera-light.png' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3,"textColor":"accent-color2"} -->
<h3 class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Feature Two', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent-color2"} -->
<p class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Read More', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"cordero-featured-service","className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-cordero-featured-service"><img src="' . esc_url( get_theme_file_uri( 'images/icon-rocket-light.png' ) ) . '" alt="" class=""/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"align":"center","level":3,"textColor":"accent-color2"} -->
<h3 class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Feature Three', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"accent-color2"} -->
<p class="has-text-align-center has-accent-color-2-color has-text-color">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Read More', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div></div>
<!-- /wp:group -->',

		'viewportWidth'	=> 1400,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/pricing-table-1',
	array(
		'title'			=> __( 'Pricing Table', 'cordero' ),
		'description'	=> _x( 'A three column pricing table.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:columns {"className":"pricing-table has-featured"} -->
<div class="wp-block-columns pricing-table has-featured"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"center","level":3,"textColor":"accent-color"} -->
<h3 class="has-text-align-center has-accent-color-color has-text-color">' . _x( 'ITEM ONE', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">' . _x( '$', 'Theme starter content', 'cordero' ) . '<strong><span class="has-inline-color has-accent-color-2-color">' . _x( '49', 'Theme starter content', 'cordero' ) . '</span></strong> <sub>' . _x( '/year', 'Theme starter content', 'cordero' ) . '</sub></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( '1 User Account', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Dictum tellus eleifend varius eros', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Cubilia rutrum consequat libero, potenti', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vivamus dictum scelerisque porta', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vestibulum fermentum mollis duis enim', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Primis tristique convallis sociosqu diam', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Commodo tempus accumsan justo', 'Theme starter content', 'cordero' ) . '</li></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-featured"} -->
<div class="wp-block-column is-featured"><!-- wp:heading {"align":"center","level":3,"textColor":"accent-color"} -->
<h3 class="has-text-align-center has-accent-color-color has-text-color">' . _x( 'ITEM TWO', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">' . _x( '$', 'Theme starter content', 'cordero' ) . '<strong><span class="has-inline-color has-accent-color-2-color">' . _x( '99', 'Theme starter content', 'cordero' ) . '</span></strong> <sub>' . _x( '/year', 'Theme starter content', 'cordero' ) . '</sub></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( '5 User Accounts', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Dictum tellus eleifend varius eros', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Cubilia rutrum consequat libero, potenti', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vivamus dictum scelerisque porta', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vestibulum fermentum mollis duis enim', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Primis tristique convallis sociosqu diam', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Commodo tempus accumsan justo', 'Theme starter content', 'cordero' ) . '</li></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"center","level":3,"textColor":"accent-color"} -->
<h3 class="has-text-align-center has-accent-color-color has-text-color">' . _x( 'ITEM THREE', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">' . _x( '$', 'Theme starter content', 'cordero' ) . '<strong><span class="has-inline-color has-accent-color-2-color">' . _x( '179', 'Theme starter content', 'cordero' ) . '</span></strong> <sub>' . _x( '/year', 'Theme starter content', 'cordero' ) . '</sub></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( '50 User Accounts', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Dictum tellus eleifend varius eros', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Cubilia rutrum consequat libero, potenti', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vivamus dictum scelerisque porta', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vestibulum fermentum mollis duis enim', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Primis tristique convallis sociosqu diam', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Commodo tempus accumsan justo', 'Theme starter content', 'cordero' ) . '</li></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',

		'viewportWidth'	=> 1400,
		'categories'	=> array( 'cordero-theme' ),
	)
);


register_block_pattern(
	'cordero/pricing-table-1-overlap',
	array(
		'title'			=> __( 'Cover and Overlapped Pricing Table', 'cordero' ),
		'description'	=> _x( 'A full width cover block and three column overlapped pricing table.', 'Block pattern description', 'cordero' ),

		'content'		=> '<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><div class="wp-block-group__inner-container">

<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'images/cover-background.jpg' ) ) . '","hasParallax":true,"dimRatio":80,"gradient":"cool-to-warm-spectrum","align":"full","className":"has-overlap"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-background-dim has-parallax has-background-gradient has-overlap" style="background-image:url(' . esc_url( get_theme_file_uri( 'images/cover-background.jpg' ) ) . ')"><span aria-hidden="true" class="wp-block-cover__gradient-background has-cool-to-warm-spectrum-gradient-background"></span><div class="wp-block-cover__inner-container">

<!-- wp:heading {"align":"center"} -->
<h2 class="has-text-align-center">' . _x( 'Example Heading', 'Theme starter content', 'cordero' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

</div></div>
<!-- /wp:cover -->

<!-- wp:columns {"className":"pricing-table has-featured overlap"} -->
<div class="wp-block-columns pricing-table has-featured overlap"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"center","level":3,"textColor":"accent-color"} -->
<h3 class="has-text-align-center has-accent-color-color has-text-color">' . _x( 'ITEM ONE', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">' . _x( '$', 'Theme starter content', 'cordero' ) . '<strong><span class="has-inline-color has-accent-color-2-color">' . _x( '49', 'Theme starter content', 'cordero' ) . '</span></strong> <sub>' . _x( '/year', 'Theme starter content', 'cordero' ) . '</sub></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( '1 User Account', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Dictum tellus eleifend varius eros', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Cubilia rutrum consequat libero, potenti', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vivamus dictum scelerisque porta', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vestibulum fermentum mollis duis enim', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Primis tristique convallis sociosqu diam', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Commodo tempus accumsan justo', 'Theme starter content', 'cordero' ) . '</li></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-featured"} -->
<div class="wp-block-column is-featured"><!-- wp:heading {"align":"center","level":3,"textColor":"accent-color"} -->
<h3 class="has-text-align-center has-accent-color-color has-text-color">' . _x( 'ITEM TWO', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">' . _x( '$', 'Theme starter content', 'cordero' ) . '<strong><span class="has-inline-color has-accent-color-2-color">' . _x( '99', 'Theme starter content', 'cordero' ) . '</span></strong> <sub>' . _x( '/year', 'Theme starter content', 'cordero' ) . '</sub></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( '5 User Accounts', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Dictum tellus eleifend varius eros', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Cubilia rutrum consequat libero, potenti', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vivamus dictum scelerisque porta', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vestibulum fermentum mollis duis enim', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Primis tristique convallis sociosqu diam', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Commodo tempus accumsan justo', 'Theme starter content', 'cordero' ) . '</li></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"align":"center","level":3,"textColor":"accent-color"} -->
<h3 class="has-text-align-center has-accent-color-color has-text-color">' . _x( 'ITEM THREE', 'Theme starter content', 'cordero' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">' . _x( '$', 'Theme starter content', 'cordero' ) . '<strong><span class="has-inline-color has-accent-color-2-color">' . _x( '179', 'Theme starter content', 'cordero' ) . '</span></strong> <sub>' . _x( '/year', 'Theme starter content', 'cordero' ) . '</sub></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . _x( '50 User Accounts', 'Theme starter content', 'cordero' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>' . _x( 'Lorem ipsum dolor sit amet consectetur', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Dictum tellus eleifend varius eros', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Cubilia rutrum consequat libero, potenti', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vivamus dictum scelerisque porta', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Vestibulum fermentum mollis duis enim', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Primis tristique convallis sociosqu diam', 'Theme starter content', 'cordero' ) . '</li><li>' . _x( 'Commodo tempus accumsan justo', 'Theme starter content', 'cordero' ) . '</li></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">' . _x( 'Click Here', 'Theme starter content', 'cordero' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div></div>
<!-- /wp:group -->',

		'viewportWidth'	=> 1400,
		'categories'	=> array( 'cordero-theme' ),
	)
);
