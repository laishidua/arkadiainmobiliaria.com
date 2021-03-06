<?php
/**
 * About Widget
 *
 * Displays about widget.
 *
 * @extends  FT_Widget
 * @version  1.0.0
 * @package  FlashToolkit/Widgets
 * @category Widgets
 * @author   ThemeGrill
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * FT_Widget_About Class
 */
class FT_Widget_About extends FT_Widget {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->widget_cssclass    = 'tg-widget tg-about-widget about-section';
		$this->widget_description = __( 'About Widget.', 'flash-toolkit' );
		$this->widget_id          = 'themegrill_flash_about';
		$this->widget_name        = __( 'FT: About', 'flash-toolkit' );
		$this->control_ops        = array( 'width' => 400, 'height' => 350 );
		$this->settings           = array(
			'about-title'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Title', 'flash-toolkit' )
			),
			'text'  => array(
				'type'  => 'textarea',
				'std'   => '',
				'label' => __( 'Text', 'flash-toolkit' )
			),
			'more_text'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Read More Text', 'flash-toolkit' )
			),
			'more_url'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Read More URL', 'flash-toolkit' )
			),
			'image' => array(
				'type'  => 'image',
				'std'   => '',
				'label' => __( 'Image', 'flash-toolkit' )
			),
		);

		parent::__construct();
	}

	/**
	 * Output widget.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$title       = isset( $instance[ 'about-title' ] ) ? $instance[ 'about-title' ] : '';
		$text        = isset( $instance[ 'text' ] ) ? $instance[ 'text' ] : '';
		$more_text   = isset( $instance[ 'more_text' ] ) ? $instance[ 'more_text' ] : '';
		$more_url    = isset( $instance[ 'more_url' ] ) ? $instance[ 'more_url' ] : '';
		$image       = isset( $instance[ 'image' ] ) ? $instance[ 'image' ] : '';


		$this->widget_start( $args, $instance );

		flash_get_template( 'content-widget-about.php', array( 'title' => $title, 'text' => $text, 'more_text' => $more_text, 'more_url' => $more_url, 'image' => $image ) );

		$this->widget_end( $args );
	}
}
