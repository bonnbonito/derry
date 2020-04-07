<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );

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

			<div class="hero">
				<div class="hero-body">
					<div class="container">

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry has-text-centered' ); ?>>
						<?php
						the_title( '<h1 class="entry-title title is-3 is-uppercase">', '</h1>' );

						get_template_part( 'template-parts/content/entry_content', get_post_type() );
						?>
					</article><!-- #post-<?php the_ID(); ?> -->

					</div>
				</div>
			</div>

			<div class="hero light-grey">
				<div class="hero-body">
					<div class="container">
						<h2 class="title section-title is-3 is-uppercase has-text-centered">Services</h2>
						<div class="columns is-multiline">
							<div class="column is-4">
								<div class="service-block">
									<img class="bg" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/img-1.png' ) ); ?>" alt="">
									<p>Kitchens</p>
									<img class="polygon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/polygon.png' ) ); ?>" alt="">
								</div>
							</div>
							<div class="column is-4">
								<div class="service-block">
									<img class="bg" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/img-1.png' ) ); ?>" alt="">
									<p>Extensions</p>
									<img class="polygon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/polygon.png' ) ); ?>" alt="">
								</div>
							</div>
							<div class="column is-4">
								<div class="service-block">
									<img class="bg" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/img-1.png' ) ); ?>" alt="">
									<p>Tiling</p>
									<img class="polygon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/polygon.png' ) ); ?>" alt="">
								</div>
							</div>
							<div class="column is-4">
								<div class="service-block">
									<img class="bg" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/img-1.png' ) ); ?>" alt="">
									<p>Kitchens</p>
									<img class="polygon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/polygon.png' ) ); ?>" alt="">
								</div>
							</div>
							<div class="column is-4">
								<div class="service-block">
									<img class="bg" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/img-1.png' ) ); ?>" alt="">
									<p>Extensions</p>
									<img class="polygon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/polygon.png' ) ); ?>" alt="">
								</div>
							</div>
							<div class="column is-4">
								<div class="service-block">
									<img class="bg" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/img-1.png' ) ); ?>" alt="">
									<p>Tiling</p>
									<img class="polygon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/polygon.png' ) ); ?>" alt="">
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
						<div class="columns is-gapless">
							<div class="column"></div>
							<div class="column">
								<div class="blog-box">
									<h3>Title</h3>
									<div class="blog-excerpt">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo</p>
									</div>
									<div class="sharer">
										<p>Share</p>
										<div class="share-icons">
											<a data-sharer="facebook" data-url="https://ellisonleao.github.io/sharer.js/"><i class="fab fa-facebook-f"></i></a>
											<a data-sharer="twitter" data-title="Checkout Sharer.js!" data-url="https://ellisonleao.github.io/sharer.js/"><i class="fab fa-twitter"></i></a>
											<a data-sharer="linkedin" data-url="https://ellisonleao.github.io/sharer.js/"><i class="fab fa-linkedin"></i></a>
										</div>
									</div>
									<a href="#" class="primary-btn">Read More</a>
								</div>
							</div>
						</div>
						<div class="columns is-gapless">
							<div class="column"></div>
							<div class="column">
								<div class="blog-box">
									<h3>Title</h3>
									<div class="blog-excerpt">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo</p>
									</div>
									<div class="sharer">
										<p>Share</p>
										<div class="share-icons">
											<a data-sharer="facebook" data-url="https://ellisonleao.github.io/sharer.js/"><i class="fab fa-facebook-f"></i></a>
											<a data-sharer="twitter" data-title="Checkout Sharer.js!" data-url="https://ellisonleao.github.io/sharer.js/"><i class="fab fa-twitter"></i></a>
											<a data-sharer="linkedin" data-url="https://ellisonleao.github.io/sharer.js/"><i class="fab fa-linkedin"></i></a>
										</div>
									</div>
									<a href="#" class="primary-btn">Read More</a>
								</div>
							</div>
						</div>

						<div class="has-text-centered">
							<a href="#" style="padding-top: 1em; display: inline-block;">Read More</a>
						</div>

					</div>
				</div>
			</div>

			<div class="hero">
				<div class="hero-body">
					<div class="container">
						<h2 class="title section-title is-3 is-uppercase has-text-centered">Contact Us</h2>

						<div class="contactform-wrap">
							<?php echo do_shortcode( '[contact-form-7 id="30" title="Contact form 1"]', false ); ?>
						</div>

					</div>
				</div>
			</div>


			<?php
		}

		?>
	</main><!-- #primary -->
<?php
get_footer();
