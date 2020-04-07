<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="site-info">
	<?php
	/* translators: Theme name. */
	printf( esc_html__( '&copy; Copyright Derry Design & Build 2020', 'wp-rig' ) );

	?>
	<span class="sep"> | </span>
	<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'terms' ) ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Terms', 'wp-rig' ) );
		?>
	</a>
	<span class="sep"> | </span>
	<?php
	/* translators: Theme name. */
	printf( esc_html__( 'Design by %s', 'wp-rig' ), '<a href="' . esc_url( 'https://www.mlawebdesigns.co.uk/' ) . '" target="_blank">MLA</a>' );
	?>
</div><!-- .site-info -->
