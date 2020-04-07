<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<header class="entry-header">
	<div class="header-has-bg">
		<?php
			get_template_part( 'template-parts/content/entry_title', get_post_type() );
		?>
	</div>
</header><!-- .entry-header -->
