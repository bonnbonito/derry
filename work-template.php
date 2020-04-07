<?php
/**
 * The template for displaying work page
 * Template Name: Work
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
					<div class="swiper-container work-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( get_theme_file_uri( '/assets/images/b1.png' ) ); ?> );">
							</div>
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( get_theme_file_uri( '/assets/images/b1.png' ) ); ?> );">
							</div>
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( get_theme_file_uri( '/assets/images/b1.png' ) ); ?> );">
							</div>
						</div>
						<div class="swiper-button-prev swiper-button-white"></div>
						<div class="swiper-button-next swiper-button-white"></div>
					</div>
					<script>
					let mySwiper = new Swiper ('.work-slider', {
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

		<div class="services-tabs tabs is-centered">
			<div class="container">
				<ul>
					<li class="is-active"><a data-target="tab-0">New Homes</a></li>
					<li><a data-target="tab-1">Extensions</a></li>
					<li><a data-target="tab-2">Loft Conversions</a></li>
					<li><a data-target="tab-3">Refurbishments</a></li>
				</ul>
			</div>
		</div>

		<div class="tabs-content-wrap">
			<div id="tab-0" class="hero about-content tab-content is-active">
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
						<div class="columns is-gapless">
							<div class="column">
								<div class="about-box f14 has-theme-grey-background-color">
									<div class="content">
										<h3>New Homes & Extensions</h3>
										<p>Having worked on commerical and domestic projects, Derry Design & Build are confident we can make your new home dream a reality by our craftmanship and attention to detail.
	</p>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="about-box f14 has-text-centered has-theme-primary-background-color has-theme-white-color">
									<div class="content">
										<p><em>"The Derry team worked efficiently on our new build and we were very happy with the speed & quality of their workmanship. We love our beautiful home"</em></p>
										<p><strong>Mrs A. Andrews</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="tab-1" class="hero about-content tab-content">
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

						<div class="columns is-gapless">
							<div class="column">
								<div class="about-box f14 has-theme-grey-background-color">
									<div class="content">
										<h3>Extensions</h3>
										<p>Having worked on commerical and domestic projects, Derry Design & Build are confident we can make your new home dream a reality by our craftmanship and attention to detail.
	</p>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="about-box f14 has-text-centered has-theme-primary-background-color has-theme-white-color">
									<div class="content">
										<p><em>"The Derry team worked efficiently on our new build and we were very happy with the speed & quality of their workmanship. We love our beautiful home"</em></p>
										<p><strong>Mrs A. Andrews</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="tab-2" class="hero about-content tab-content">
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

						<div class="columns is-gapless">
							<div class="column">
								<div class="about-box f14 has-theme-grey-background-color">
									<div class="content">
										<h3>Loft Conversions</h3>
										<p>Having worked on commerical and domestic projects, Derry Design & Build are confident we can make your new home dream a reality by our craftmanship and attention to detail.
	</p>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="about-box f14 has-text-centered has-theme-primary-background-color has-theme-white-color">
									<div class="content">
										<p><em>"The Derry team worked efficiently on our new build and we were very happy with the speed & quality of their workmanship. We love our beautiful home"</em></p>
										<p><strong>Mrs A. Andrews</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="tab-3" class="hero about-content tab-content">
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
						<div class="columns is-gapless">
							<div class="column">
								<div class="about-box f14 has-theme-grey-background-color">
									<div class="content">
										<h3>Refurbishments</h3>
										<p>Having worked on commerical and domestic projects, Derry Design & Build are confident we can make your new home dream a reality by our craftmanship and attention to detail.
	</p>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="about-box f14 has-text-centered has-theme-primary-background-color has-theme-white-color">
									<div class="content">
										<p><em>"The Derry team worked efficiently on our new build and we were very happy with the speed & quality of their workmanship. We love our beautiful home"</em></p>
										<p><strong>Mrs A. Andrews</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			jQuery(document).ready( function($){
				function initSwiper() {
					const servicesSwiper = new Swiper ('.services-slider', {
						loop: true,
						draggable: false,
						autoplay: {
							delay: 2500,
							disableOnInteraction: false,
						},
						pagination: {
							el: '.swiper-pagination',
							clickable: true,
						},
					});
				}
				initSwiper();

				$('.tabs li a').on('click', function(e){
					let target = $(this).data('target');
					$('.tabs li').removeClass('is-active');
					console.log(target);
					$(this).closest('li').addClass('is-active');
					$('.tabs-content-wrap .tab-content').removeClass('is-active');
					$('.tabs-content-wrap #'+target).addClass('is-active');
					initSwiper();
				});
			});
		</script>

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


	</main><!-- #primary -->
<?php
get_footer();
