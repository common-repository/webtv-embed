<?php

/*
Plugin Name: Web.TV Embed
Plugin URI: https://web.tv
Description: Embed videos from Web.TV into your WordPress site.
Version: 1.0
Author: Web.TV Developer Team
Author URI: https://profiles.wordpress.org/webtvdev
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Security check
 * Prevent direct access to the file.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Include plugin files
 */
include_once( plugin_dir_path( __FILE__ ) . 'includes/webtv-oembed-provider.php' );
