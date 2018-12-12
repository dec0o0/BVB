<?php
remove_filter( 'the_content', 'wpautop' );
add_theme_support( 'post-thumbnails' ); 

function getAssetURL( $atts ){
  $attrs = shortcode_atts(
		array(
			'url' => 'no foo'
    ), $atts, 'bartag' );
	return get_template_directory_uri() . '/assets/' . $attrs['url'];
}

add_shortcode( 'asset', 'getAssetURL' );

function linkTo($atts) {
	extract( shortcode_atts(
		array(
				'href' => "",
				'text' => ""
		), $atts )
);
	return '<a href="' . home_url() . "/" . $href . '">' . $text . '</a>';
}

add_shortcode('link', 'linkTo');