<?php
/**
 * WP_Rig\WP_Rig\Swiper class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Swiper;

use WP_Rig\WP_Rig\Component_Interface;
use function wp_enqueue_style;
use function wp_enqueue_scripts;

/**
 * Class for Bulma Styles
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'swiper';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', [ $this, 'action_enqueue_swiper' ] );
	}

	/**
	 * Enqueues a script for arcgis.
	 */
	public function action_enqueue_swiper() {
		if ( is_front_page() || is_page( 'about-us' ) || is_page( 'services' ) || is_page( 'our-work' ) ) {
			wp_enqueue_style( 'wp-rig-swipercss', '//unpkg.com/swiper/css/swiper.min.css', [], null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
			wp_enqueue_style( 'wp-rig-swiper', get_theme_file_uri( '/assets/css/swiper.min.css' ), [ 'wp-rig-swipercss' ], null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
			wp_enqueue_script( 'wp-rig-swiper', '//unpkg.com/swiper/js/swiper.min.js', [], null, false ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		};
	}

}
