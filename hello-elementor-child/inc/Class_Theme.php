<?php
/**
 * Main theme class.
 *
 * @package hello-elementor-child
 */

defined( 'ABSPATH' ) || exit;

class Hello_Elementor_Child_Theme {
	/**
	 * Init hooks.
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
	}

	/**
	 * Theme setup.
	 */
	public function setup() {
		load_child_theme_textdomain( 'hello-elementor-child', get_stylesheet_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);
		add_theme_support( 'custom-logo' );
		add_theme_support( 'align-wide' );

		if ( class_exists( 'WooCommerce' ) ) {
			add_theme_support( 'woocommerce' );
		}

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'hello-elementor-child' ),
			)
		);
	}
}

new Hello_Elementor_Child_Theme();
