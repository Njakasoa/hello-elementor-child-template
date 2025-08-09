<?php
/**
 * Helper functions.
 *
 * @package hello-elementor-child
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Backwards compatibility for wp_body_open().
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Allow safe SVG uploads.
 *
 * @param array  $data     File data.
 * @param string $file     File path.
 * @param string $filename File name.
 * @param array  $mimes    Allowed mimes.
 * @return array
 */
function hello_elementor_child_check_svg( $data, $file, $filename, $mimes ) {
	$filetype = wp_check_filetype_and_ext( $file, $filename, $mimes );

	if ( 'svg' === $filetype['ext'] && 'image/svg+xml' === $filetype['type'] ) {
		$data['ext']  = 'svg';
		$data['type'] = 'image/svg+xml';
	} elseif ( 'svg' === $filetype['ext'] ) {
		$data['ext']  = false;
		$data['type'] = false;
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'hello_elementor_child_check_svg', 10, 4 );

/**
 * Add SVG to mime types.
 *
 * @param array $mimes Mime types.
 * @return array
 */
function hello_elementor_child_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'hello_elementor_child_mime_types' );
