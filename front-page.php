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

			<?php
			if ( have_rows( 'services' ) ) :
				?>
			<div class="hero light-grey">
				<div class="hero-body">
					<div class="container">
						<h2 class="title section-title is-3 is-uppercase has-text-centered">Services</h2>
						<div class="columns is-multiline">
							<?php while ( have_rows( 'services' ) ) : the_row(); ?>
							<div class="column is-4">
								<div class="service-block">
									<a href="<?php the_sub_field( 'link' ) ?>"></a>
									<img class="bg" src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
									<p><?php the_sub_field( 'service_name' ); ?></p>
									<img class="polygon" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/polygon.png' ) ); ?>" alt="">
								</div>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>

			<?php get_template_part( 'template-parts/content/entry', 'testimonials' ); ?>

			<?php get_template_part( 'template-parts/content/blog', 'box' ); ?>

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
