<?php
/**
 * The template for displaying about page
 * Template Name: About
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

			get_template_part( 'template-parts/content/entry', 'about' );
		}
		?>

		<div class="hero about-contents">
			<div class="hero-body">
				<div class="container">
					<?php
					if ( have_rows( 'about_contents' ) ) :
						while ( have_rows( 'about_contents' ) ) :
							the_row();
							?>
					<div class="columns is-gapless">
						<div class="column">
							<img src="<?php echo esc_url( get_sub_field( 'image' )['url'] ); ?>" alt="">
						</div>
						<div class="column">
							<div class="about-box">
								<div>
									<?php the_sub_field( 'content' ); ?>
								</div>
							</div>
						</div>
					</div>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>

		<?php get_template_part( 'template-parts/content/entry', 'testimonials' ); ?>
	</main><!-- #primary -->
<?php
get_footer();
