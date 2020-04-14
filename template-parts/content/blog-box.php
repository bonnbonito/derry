<?php
/**
 * Template part for displaying a post's comment and edit links
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

$the_query = new WP_Query( array(
    'posts_per_page'      => 2,
    'ignore_sticky_posts' => 1,
    )
);

if ( $the_query->have_posts() ) :
?>
<div class="hero light-grey blog-box-wrap">
    <div class="hero-body">
        <div class="container">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="columns is-gapless">
                <div class="column">
                <?php if ( has_post_thumbnail() ) {
                    ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'full' ); ?>
                    </a>
                    <?php
                } ?>
                </div>
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
            endwhile;
            wp_reset_postdata();
            ?>
            <div class="has-text-centered">
                <a href="<?php bloginfo( 'url' ) ?>/blog/" style="padding-top: 1em; display: inline-block;">Read More</a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

