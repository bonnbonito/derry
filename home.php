<?php
/**
 * The template for displaying blog page
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
		<div class="hero light-grey blog-box-wrap">
			<div class="hero-body">
				<div class="container">
					<h1 class="entry-title title is-3 is-uppercase has-text-centered">Blogs</h1>
					<?php
					while ( have_posts() ) {
						the_post();
						?>
					<div class="columns is-gapless">
						<?php if ( has_post_thumbnail() ) {
							?>
						<div class="column">
							<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'full' ); ?>
							</a>						
						</div>
							<?php
						} ?>
						<div class="column">
							<div class="blog-box">
								<h3><?php the_title(); ?></h3>
								<div class="blog-excerpt">
									<p><?php the_excerpt(); ?></p>
								</div>
								<div class="sharer">
									<p>Share</p>
									<div class="share-icons">
										<a data-sharer="facebook" data-url="<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i></a>
										<a data-sharer="twitter" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a>
										<a data-sharer="linkedin" data-url="<?php the_permalink(); ?>"><i class="fab fa-linkedin"></i></a>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" class="primary-btn">Read More</a>
							</div>
						</div>
					</div>
					<?php
					}
					get_template_part( 'template-parts/content/pagination' );
					?>
				</div>
			</div>
		</div>
	</main><!-- #primary -->
<?php
get_footer();
