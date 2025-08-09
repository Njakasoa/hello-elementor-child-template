<?php
namespace HelloElementorChild\Elementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

/**
 * Sample widget.
 */
class Sample_Widget extends Widget_Base {
	/**
	 * Widget slug.
	 */
	public function get_name() {
		return 'hec-sample';
	}

	/**
	 * Widget title.
	 */
	public function get_title() {
		return __( 'Sample Widget', 'hello-elementor-child' );
	}

	/**
	 * Widget icon.
	 */
	public function get_icon() {
		return 'eicon-star';
	}

	/**
	 * Widget categories.
	 */
	public function get_categories() {
		return array( 'general' );
	}

	/**
	 * Register controls.
	 */
	protected function register_controls() {
		$this->add_control(
			'title',
			array(
				'label'   => __( 'Title', 'hello-elementor-child' ),
				'type'    => Controls_Manager::TEXT,
				'default' => __( 'Hello world', 'hello-elementor-child' ),
			)
		);
	}

	/**
	 * Render output.
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		echo '<div class="hec-widget">' . esc_html( $settings['title'] ) . '</div>';
	}
}
