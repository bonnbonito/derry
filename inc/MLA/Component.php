<?php
/**
 * WP_Rig\WP_Rig\Bulma class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\MLA;

use WP_Rig\WP_Rig\Component_Interface;
use function wp_enqueue_style;
use function wp_enqueue_scripts;

/**
 * Class for MLA Custom functions
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'mla';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', [ $this, 'action_enqueue_mla' ] );
	}

	/**
	 * Enqueues a script for custom  mla scripts and styles.
	 */
	public function action_enqueue_mla() {
		wp_enqueue_script( 'wp-rig-sharer', '//cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js', [], null, false ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
	}

}
