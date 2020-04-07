<?php
/**
 * Template part for displaying about
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<div class="container">
		<?php
		get_template_part( 'template-parts/content/entry_header', 'about' );

		get_template_part( 'template-parts/content/entry_content', get_post_type() );

		get_template_part( 'template-parts/content/entry_footer', get_post_type() );
		?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
