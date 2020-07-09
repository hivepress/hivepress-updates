<?php
/**
 * Plugin Name: HivePress Updates
 * Description: Get updates for purchased themes and extensions.
 * Version: 1.0.2
 * Author: HivePress
 * Author URI: https://hivepress.io/
 * Text Domain: hivepress-updates
 * Domain Path: /languages/
 *
 * @package HivePress
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Register extension directory.
add_filter(
	'hivepress/v1/extensions',
	function( $extensions ) {
		$extensions['updates'] = __DIR__;

		return $extensions;
	}
);
