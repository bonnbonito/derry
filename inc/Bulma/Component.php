<?php
/**
 * WP_Rig\WP_Rig\Bulma class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Bulma;

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
		return 'bulma';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', [ $this, 'action_enqueue_bulma' ] );
	}

	/**
	 * Enqueues a script for arcgis.
	 */
	public function action_enqueue_bulma() {
		wp_enqueue_style( 'wp-rig-bulma', '//cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css', [], null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
	}

}
