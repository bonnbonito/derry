<?php
/**
 * The template for displaying services page
 * Template Name: Services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) {
			the_post();
				?>
		<div class="banner-slider-wrap">
				<div class="container">
					<div class="swiper-container banner-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( get_theme_file_uri( '/assets/images/b1.png' ) ); ?> );">
								<div class="banner-swipe">
									<h3>WHERE THE HOUSE becomes</h3>
									<h2>YOUR home</h2>
									<a href="#">Contact</a>
									<div class="overlay"></div>
								</div>
							</div>
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( get_theme_file_uri( '/assets/images/b1.png' ) ); ?> );">
								<div class="banner-swipe">
									<h3>WHERE THE HOUSE becomes</h3>
									<h2>YOUR home</h2>
									<a href="#">Contact</a>
									<div class="overlay"></div>
								</div>
							</div>
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( get_theme_file_uri( '/assets/images/b1.png' ) ); ?> );">
								<div class="banner-swipe">
									<h3>WHERE THE HOUSE becomes</h3>
									<h2>YOUR home</h2>
									<a href="#">Contact</a>
									<div class="overlay"></div>
								</div>
							</div>
						</div>
						<div class="swiper-button-prev swiper-button-white"></div>
						<div class="swiper-button-next swiper-button-white"></div>
					</div>
					<script>
					let mySwiper = new Swiper ('.banner-slider', {
						loop: true,
						autoplay: {
							delay: 2500,
							disableOnInteraction: false,
						},
						navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
						},
					})
					</script>
				</div>
			</div>

			<div class="spacer"></div>

			<?php
			get_template_part( 'template-parts/content/entry', 'services' );
		}
		?>

		<div class="hero about-content">
			<div class="hero-body">
				<div class="container w1062">
					<div class="swiper-container services-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src=<?php echo esc_url( get_theme_file_uri( '/assets/images/s1.png' ) ); ?> alt="">
							</div>
							<div class="swiper-slide">
								<img src=<?php echo esc_url( get_theme_file_uri( '/assets/images/s1.png' ) ); ?> alt="">
							</div>
							<div class="swiper-slide">
								<img src=<?php echo esc_url( get_theme_file_uri( '/assets/images/s1.png' ) ); ?> alt="">
							</div>
							<div class="swiper-slide">
								<img src=<?php echo esc_url( get_theme_file_uri( '/assets/images/s1.png' ) ); ?> alt="">
							</div>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
					<script>
					let servicesSwiper = new Swiper ('.services-slider', {
						loop: true,
						autoplay: {
							delay: 22500,
							disableOnInteraction: false,
						},
						pagination: {
							el: '.swiper-pagination',
							clickable: true,
						},
					})
					</script>
					<div class="columns is-gapless">
						<div class="column">
							<div class="about-box f14 has-theme-grey-background-color">
								<div class="content has-text-centered">
									<h3>New Homes & Extensions</h3>
									<p>Having worked on commerical and domestic projects, Derry Design & Build are confident we can make your new home dream a reality by our craftmanship and attention to detail.</p>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>

		<?php get_template_part( 'template-parts/content/entry', 'testimonials' ); ?>

		<div class="hero light-grey">
			<div class="hero-body">
				<div class="container">
					<h2 class="title section-title is-3 is-uppercase has-text-centered">Contact Us</h2>

					<div class="contactform-wrap">
						<?php echo do_shortcode( '[contact-form-7 id="30" title="Contact form 1"]', false ); ?>
					</div>

				</div>
			</div>
		</div>
	</main><!-- #primary -->
<?php
get_footer();
