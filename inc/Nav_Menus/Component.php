<?php
/**
 * WP_Rig\WP_Rig\Nav_Menus\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Nav_Menus;

use WP_Rig\WP_Rig\Component_Interface;
use WP_Rig\WP_Rig\Templating_Component_Interface;
use WP_Post;
use function add_action;
use function add_filter;
use function register_nav_menus;
use function esc_html__;
use function has_nav_menu;
use function wp_nav_menu;

/**
 * Class for managing navigation menus.
 *
 * Exposes template tags:
 * * `wp_rig()->is_primary_nav_menu_active()`
 * * `wp_rig()->display_primary_nav_menu( array $args = [] )`
 */
class Component implements Component_Interface, Templating_Component_Interface {

	const PRIMARY_NAV_MENU_SLUG = 'primary';
	const LEFT_NAV_MENU_SLUG    = 'left';
	const RIGHT_NAV_MENU_SLUG   = 'right';
	const FOOTER_NAV_MENU_SLUG  = 'footer';

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'nav_menus';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', [ $this, 'action_register_nav_menus' ] );
		add_filter( 'walker_nav_menu_start_el', [ $this, 'filter_nav_menu_dropdown_nav_symbol' ], 10, 4 );
	}

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `wp_rig()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array {
		return [
			'is_primary_nav_menu_active' => [ $this, 'is_primary_nav_menu_active' ],
			'display_primary_nav_menu'   => [ $this, 'display_primary_nav_menu' ],
			'is_left_nav_menu_active'    => [ $this, 'is_left_nav_menu_active' ],
			'display_left_nav_menu'      => [ $this, 'display_left_nav_menu' ],
			'is_right_nav_menu_active'   => [ $this, 'is_right_nav_menu_active' ],
			'display_right_nav_menu'     => [ $this, 'display_right_nav_menu' ],
			'is_footer_nav_menu_active'  => [ $this, 'is_footer_nav_menu_active' ],
			'display_footer_nav_menu'    => [ $this, 'display_footer_nav_menu' ],
		];
	}

	/**
	 * Registers the navigation menus.
	 */
	public function action_register_nav_menus() {
		register_nav_menus(
			[
				static::PRIMARY_NAV_MENU_SLUG => esc_html__( 'Mobile', 'wp-rig' ),
				static::LEFT_NAV_MENU_SLUG    => esc_html__( 'Left', 'wp-rig' ),
				static::RIGHT_NAV_MENU_SLUG   => esc_html__( 'Right', 'wp-rig' ),
				static::FOOTER_NAV_MENU_SLUG  => esc_html__( 'Footer', 'wp-rig' ),
			]
		);
	}

	/**
	 * Adds a dropdown_nav symbol to nav menu items with children.
	 *
	 * Adds the dropdown_nav markup after the menu link element,
	 * before the submenu.
	 *
	 * Javascript converts the symbol to a toggle button.
	 *
	 * @TODO:
	 * - This doesn't work for the page menu because it
	 *   doesn't have a similar filter. So the dropdown_nav symbol
	 *   is only being added for page menus if JS is enabled.
	 *   Create a ticket to add to core?
	 *
	 * @param string  $item_output The menu item's starting HTML output.
	 * @param WP_Post $item        Menu item data object.
	 * @param int     $depth       Depth of menu item. Used for padding.
	 * @param object  $args        An object of wp_nav_menu() arguments.
	 * @return string Modified nav menu HTML.
	 */
	public function filter_nav_menu_dropdown_nav_symbol( string $item_output, WP_Post $item, int $depth, $args ) : string {

		// not for mobile.
		if ( static::PRIMARY_NAV_MENU_SLUG === $args->theme_location ) {
			return $item_output;
		}

		// Add the dropdown_nav for items that have children.
		if ( ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes, true ) ) {
			return $item_output . '<span class="dropdown_nav"><i class="fas fa-angle-down"></i></span>';
		}

		return $item_output;
	}

	/**
	 * Checks whether the primary navigation menu is active.
	 *
	 * @return bool True if the primary navigation menu is active, false otherwise.
	 */
	public function is_primary_nav_menu_active() : bool {
		return (bool) has_nav_menu( static::PRIMARY_NAV_MENU_SLUG );
	}

	/**
	 * Checks whether the left navigation menu is active.
	 *
	 * @return bool True if the left navigation menu is active, false otherwise.
	 */
	public function is_left_nav_menu_active() : bool {
		return (bool) has_nav_menu( static::LEFT_NAV_MENU_SLUG );
	}

	/**
	 * Checks whether the right navigation menu is active.
	 *
	 * @return bool True if the right navigation menu is active, false otherwise.
	 */
	public function is_right_nav_menu_active() : bool {
		return (bool) has_nav_menu( static::RIGHT_NAV_MENU_SLUG );
	}

	/**
	 * Checks whether the footer navigation menu is active.
	 *
	 * @return bool True if the footer navigation menu is active, false otherwise.
	 */
	public function is_footer_nav_menu_active() : bool {
		return (bool) has_nav_menu( static::FOOTER_NAV_MENU_SLUG );
	}

	/**
	 * Displays the primary navigation menu.
	 *
	 * @param array $args Optional. Array of arguments. See `wp_nav_menu()` documentation for a list of supported
	 *                    arguments.
	 */
	public function display_primary_nav_menu( array $args = [] ) {
		if ( ! isset( $args['container'] ) ) {
			$args['container'] = 'ul';
		}

		$args['theme_location'] = static::PRIMARY_NAV_MENU_SLUG;

		wp_nav_menu( $args );
	}

	/**
	 * Displays the left navigation menu.
	 *
	 * @param array $args Optional. Array of arguments. See `wp_nav_menu()` documentation for a list of supported
	 *                    arguments.
	 */
	public function display_left_nav_menu( array $args = [] ) {
		if ( ! isset( $args['container'] ) ) {
			$args['container'] = 'ul';
		}

		$args['theme_location'] = static::LEFT_NAV_MENU_SLUG;

		wp_nav_menu( $args );
	}

	/**
	 * Displays the right navigation menu.
	 *
	 * @param array $args Optional. Array of arguments. See `wp_nav_menu()` documentation for a list of supported
	 *                    arguments.
	 */
	public function display_right_nav_menu( array $args = [] ) {
		if ( ! isset( $args['container'] ) ) {
			$args['container'] = 'ul';
		}

		$args['theme_location'] = static::RIGHT_NAV_MENU_SLUG;

		wp_nav_menu( $args );
	}

	/**
	 * Displays the footer navigation menu.
	 *
	 * @param array $args Optional. Array of arguments. See `wp_nav_menu()` documentation for a list of supported
	 *                    arguments.
	 */
	public function display_footer_nav_menu( array $args = [] ) {
		if ( ! isset( $args['container'] ) ) {
			$args['container'] = 'ul';
		}

		$args['theme_location'] = static::FOOTER_NAV_MENU_SLUG;

		wp_nav_menu( $args );
	}
}
