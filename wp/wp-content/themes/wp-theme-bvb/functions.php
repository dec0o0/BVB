<?php

remove_filter( 'the_content', 'wpautop' );

function getAssetURL( $atts ){
  $attrs = shortcode_atts(
		array(
			'url' => 'no foo'
    ), $atts, 'bartag' );
	return get_template_directory_uri() . '/assets/' . $attrs['url'];
}
add_shortcode( 'asset', 'getAssetURL' );