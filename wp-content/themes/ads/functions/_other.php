<?php

/* ===============================================================================
  Other
=============================================================================== */

add_action( 'wp_head', 'my_custom_meta', 0 );
function my_custom_meta() {
	global $my_meta;

	if ( $my_meta === true ) {
		// Use for Yoast SEO
		remove_all_actions( 'wpseo_head' );

		// Use for All in one seo pack.
		add_filter( 'aioseo_disable', '__return_false' );
	}
}
