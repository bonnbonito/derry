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
			if ( have_rows( 'slider' ) ) :
			?>
		<div class="banner-slider-wrap">
				<div class="container">
					<div class="swiper-container work-slider">
						<div class="swiper-wrapper">
							<?php
							while ( have_rows( 'slider' ) ) :
								the_row();
								$bgImage = get_sub_field( 'image' ) ? get_sub_field( 'image' )['url'] : get_theme_file_uri( '/assets/images/b1.png' );
								?>
							<div class="swiper-slide" style="background-image: url( <?php echo esc_url( $bgImage ); ?> );">
							</div>
							<?php endwhile; ?>
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
				<?php endif; ?>

			<?php
			get_template_part( 'template-parts/content/entry', 'services' );
		}

		if ( have_rows( 'work_tabs' ) ):
		$index = 0;
		?>

		<div class="services-tabs tabs is-centered">
			<div class="container">
				<ul>
				<?php while ( have_rows( 'work_tabs' ) ) : the_row(); ?>
				<li class="<?php echo esc_attr( 0 === $index ? 'is-active' : '' ); ?>"><a data-target="tab-<?php echo esc_attr( $index ); ?>" data-index="<?php echo esc_attr( $index ); ?>"><?php the_sub_field( 'title' ); ?></a></li>
				<?php $index++; endwhile; ?>
				</ul>
			</div>
		</div>

		<div class="tabs-content-wrap">
			<?php $index = 0; ?>
			<?php while ( have_rows( 'work_tabs' ) ) : the_row(); ?>
			<div id="tab-<?php echo esc_attr( $index ); ?>" class="hero about-content tab-content <?php echo esc_attr( 0 === $index ? 'is-active' : '' ); ?>">
				<div class="hero-body">
					<div class="container w1062">
						<?php
						$images = get_sub_field( 'images' );
						$size = 'full';
						if ( $images ): ?>
						<div class="swiper-container services-slider">
							<div class="swiper-wrapper">
							<?php foreach ( $images as $image ) : ?>
								<div class="swiper-slide">
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								</div>
							<?php endforeach; ?>
							</div>
							<!-- Add Pagination -->
							<div class="swiper-pagination"></div>
						</div>
						<?php endif; ?>
						<div class="columns is-gapless">
							<div class="column">
								<div class="about-box f14 has-theme-grey-background-color">
									<div class="content">
										<?php the_sub_field( 'content' ); ?>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="about-box f14 has-text-centered has-theme-primary-background-color has-theme-white-color">
									<div class="content">
										<?php the_sub_field( 'testimonial' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $index++; endwhile; ?>
		</div>

		<script>
			jQuery(document).ready( function($){
				const mySwiper = new Swiper ('.services-slider', {
					loop: true,
					draggable: false,
					autoplay: {
						delay: 4500,
						disableOnInteraction: false,
					},
					autoHeight: true,
					pagination: {
						el: '.swiper-pagination',
						clickable: true,
					},
				});

				$('.tabs li a').on('click', function(e){
					let target = $(this).data('target');
					$('.tabs li').removeClass('is-active');
					$(this).closest('li').addClass('is-active');
					$('.tabs-content-wrap .tab-content').removeClass('is-active');
					$('.tabs-content-wrap #'+target).addClass('is-active');
					mySwiper[$(this).data('index')].update();
				});
			});
		</script>

		<?php endif; ?>

		<?php get_template_part( 'template-parts/content/blog', 'box' ); ?>

	</main><!-- #primary -->
<?php
get_footer();
