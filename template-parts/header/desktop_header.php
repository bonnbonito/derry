<?php
/**
 * Template part for displaying the custom header media
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="desktop-header is-hidden-touch">
	<div class="container">
		<div class="desktop-header-nav">
			<div class="left-nav">
				<?php wp_rig()->display_left_nav_menu( [ 'menu_id' => 'left-menu' ] ); ?>
			</div>
			<div class="center-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ); ?>" alt="">
				</a>
			</div>
			<div class="right-nav">
				<?php wp_rig()->display_right_nav_menu( [ 'menu_id' => 'right-menu' ] ); ?>
			</div>
		</div>
	</div>
</div>
