<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-header is-hidden-touch">
			<div class="container">
				<div class="top-container">
					<div class="top-left">
						<a href="mailto:info@abbey.com"><i class="fas fa-envelope"></i> info@abbey.com</a>
					</div>
					<div class="top-right">
						<div class="social-icons">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div>
						<div class="top-call">
							<a href="tel:"><span><i class="fas fa-phone"></i></span> 01932 825 233</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/header/custom_header' ); ?>

		<?php get_template_part( 'template-parts/header/desktop_header' ); ?>

		<?php get_template_part( 'template-parts/header/mobile_header' ); ?>

	</header><!-- #masthead -->
