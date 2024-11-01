<?php
/**
 * Security check
 * Prevent direct access to the file.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! function_exists( 'webtv_oembed_provider' ) ) {
	/**
	 * Web.TV oEmbed
	 * Register oEmbed provider.
	 *
	 * @since 1.0
	 */
	function webtv_oembed_provider() {
		wp_oembed_add_provider( '#https?://(.+\.)?web\.tv/video/.+#i', 'https://web.tv/api/oembed', true );
	}
}

add_action( 'init', 'webtv_oembed_provider' );
