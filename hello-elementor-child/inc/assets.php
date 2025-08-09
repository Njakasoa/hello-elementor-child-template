<?php
/**
 * Asset handling.
 *
 * @package hello-elementor-child
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue styles and scripts.
 */
function hello_elementor_child_assets() {
	wp_enqueue_style(
		'hello-elementor-parent',
		get_template_directory_uri() . '/style.css',
		array(),
		filemtime( get_template_directory() . '/style.css' )
	);

	$dist_path = get_theme_file_path( 'dist' );
	$dist_uri  = get_theme_file_uri( 'dist' );

	$css = $dist_path . '/app.css';
	if ( file_exists( $css ) ) {
		wp_enqueue_style(
			'hello-elementor-child',
			$dist_uri . '/app.css',
			array(),
			filemtime( $css )
		);
	}

	$js = $dist_path . '/app.js';
	if ( file_exists( $js ) ) {
		wp_enqueue_script(
			'hello-elementor-child',
			$dist_uri . '/app.js',
			array(),
			filemtime( $js ),
			true
		);
		wp_script_add_data( 'hello-elementor-child', 'defer', true );
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_assets' );
