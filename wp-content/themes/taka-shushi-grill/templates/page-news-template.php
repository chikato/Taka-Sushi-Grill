<?php
/**
 * Template Name: Page News template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
?>

<?php

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$custom_args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged
);

$custom_query = new WP_Query( $custom_args );

?>


<div class="block">
    <section class="section bg-img page" style="background: url('<?php echo get_background(); ?>')">
        <div class="mask"></div>
    </section>
    <section class="tk-page">
        <div class="container news-page items-group align-row flex-wrap">
            <?php if ( $custom_query->have_posts() ) : ?>
                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    <div class="post">
                        <a href="<?php echo get_permalink(); ?>" class="items-group vertical-center">
                            <div class="bg-img post-img" style="background: url('<?php echo get_field("post_image"); ?>')">
                                <div class="filter"></div>
                                <time datetime="<?php echo get_the_date("Y/m/d"); ?>"><?php echo get_the_date('m/d'); ?></time>
                            </div
                            ><div class="post-content">
                                <div class="post-title"><?php the_title(); ?></div>
                                <div class="post-des"><?php the_field("short_description"); ?></div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
        <?php
        if (function_exists(post_pagination)) {
            post_pagination($custom_query->max_num_pages,"",$paged);
        }
        ?>
    </section>
</div>
<?php get_footer(); ?>
