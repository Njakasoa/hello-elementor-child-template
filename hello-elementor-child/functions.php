<?php
/**
 * Theme functions and definitions
 *
 * @package hello-elementor-child
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'HELLO_ELEMENTOR_CHILD_VERSION' ) ) {
	define( 'HELLO_ELEMENTOR_CHILD_VERSION', '1.0.0' );
}

require_once get_theme_file_path( 'inc/helpers.php' );
require_once get_theme_file_path( 'inc/assets.php' );
require_once get_theme_file_path( 'inc/Class_Theme.php' );
require_once get_theme_file_path( 'inc/Elementor/class-plugin.php' );
