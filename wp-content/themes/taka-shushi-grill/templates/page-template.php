<?php
/**
 * Template Name: Page template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="block">
        <section class="section bg-img page" style="background: url('<?php echo get_background(get_the_ID()); ?>')">
            <div class="mask"></div>
        </section>
        <section class="tk-page">
            <div class="container items-group">
                <div class="about-img"><img class="img-responsive" src="<?php echo get_field("post_image"); ?>"></div
                ><div class="about-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
