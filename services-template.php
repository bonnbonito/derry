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
				
			if ( have_rows( 'banner_slides' ) ) :
			?>
			<div class="banner-slider-wrap">
				<div class="container">
					<div class="swiper-container banner-slider">
						<div class="swiper-wrapper">
							<?php
							while ( have_rows( 'banner_slides' ) ) :
								the_row();
								$bgImage = get_sub_field( 'background_image' ) ? get_sub_field( 'background_image' )['url'] : get_theme_file_uri( '/assets/images/b1.png' );
								?>
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( $bgImage ); ?> );">
								<div class="banner-swipe">
									<?php the_sub_field( 'content' ); ?>
									<a href="<?php the_sub_field( 'link_url' ); ?>"><?php the_sub_field( 'link' ); ?></a>
									<div class="overlay"></div>
								</div>
							</div>
							<?php endwhile; ?>
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
			endif;
			?>

			<?php
			get_template_part( 'template-parts/content/entry', 'services' );
		}
		?>

		<div class="hero about-content">
			<div class="hero-body">
				<div class="container w1062">
					<?php
					$images = get_field( 'gallery_slider' );
					$size = 'full';
					if ( $images ): ?>
					<div class="swiper-container services-slider">
						<div class="swiper-wrapper">
							<?php foreach( $images as $image ): ?>
								<div class="swiper-slide">
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								</div>
							<?php endforeach; ?>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
					<script>
					let servicesSwiper = new Swiper ('.services-slider', {
						loop: true,
						autoHeight: true,
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
					<?php endif; ?>
					<div class="columns is-gapless">
						<div class="column">
							<div class="about-box f14 has-theme-grey-background-color">
								<div class="content has-text-centered">
									<?php the_field( 'bottom_content' ); ?>
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
