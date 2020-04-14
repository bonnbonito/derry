<?php
/**
 * Template part for displaying about
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( have_rows( 'testimonials', 'option' ) ) :
	?>
<div class="hero testimonials">
	<div class="hero-body">
		<div class="container">
			<h2 class="title section-title is-3 is-uppercase has-text-centered">Testimonials</h2>
			<div class="swiper-container testimonials-slider">
				<div class="swiper-wrapper">
					<?php 
					while ( have_rows( 'testimonials', 'option' ) ) : 
						the_row(); 
					?>
					<div class="swiper-slide">
						<div class="polygon">
							<div class="polygon-contents">
								<?php if ( get_sub_field( 'image' ) ) : ?>
									<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
								<?php endif;  ?>
								<p><?php the_sub_field( 'content' ); ?></p>
								<p class="name"><?php the_sub_field( 'name' ); ?></p>
							</div>
						</div>
					</div>
					<?php 
					endwhile; 
					?>					
				</div>
				<div class="testi-nav">
					<div class="testi-prev"><i class="fas fa-arrow-left"></i></div>
					<div class="testi-dot"><i class="fas fa-circle"></i></div>
					<div class="testi-next"><i class="fas fa-arrow-right"></i></div>
				</div>
			</div>
			<script>
			let testimonialSwiper = new Swiper ('.testimonials-slider', {
				loop: true,
				slidesPerView: 'auto',
				spaceBetween: 30,
				centeredSlides: true,
				autoplay: {
					delay: 25000,
					disableOnInteraction: false,
				},
			})
			const nextTesti = document.querySelector('.testi-next');
			const prevTesti = document.querySelector('.testi-prev');
			nextTesti.addEventListener('click', function () {
				testimonialSwiper.slideNext();
			});
			prevTesti.addEventListener('click', function () {
				testimonialSwiper.slidePrev();
			});
			</script>
		</div>
	</div>
</div>
	<?php 
	endif; 
?>