<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="columns">
				<div class="column is-2">
					<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/footer-logo.png' ) ); ?>" alt="">
					</a>
				</div>
				<div class="column is-10">
					<div class="footer-nav">
						<?php wp_rig()->display_footer_nav_menu( [ 'menu_id' => 'footer-menu' ] ); ?>
					</div>
					<div class="footer-info">
						<?php get_template_part( 'template-parts/footer/info' ); ?>
						<div class="social-footer">
							<p>Connect with us</p>
							<div class="social-links">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-youtube"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
