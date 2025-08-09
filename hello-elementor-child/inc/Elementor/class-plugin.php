<?php
/**
 * Elementor integration.
 */

namespace HelloElementorChild\Elementor;

defined( 'ABSPATH' ) || exit;

if ( ! did_action( 'elementor/loaded' ) ) {
	return;
}

class Plugin {
	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'elementor/widgets/register', array( $this, 'register_widgets' ) );
	}

	/**
	 * Register widgets.
	 *
	 * @param \Elementor\Widgets_Manager $widgets_manager Widgets manager instance.
	 */
	public function register_widgets( \Elementor\Widgets_Manager $widgets_manager ) {
		// require_once __DIR__ . '/widgets/class-sample-widget.php';
		// $widgets_manager->register( new \HelloElementorChild\Elementor\Widgets\Sample_Widget() );
	}
}

new Plugin();
