<?php
/**
 * Template Name: Page About Us template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
?>
<div class="block">
    <section class="section bg-img page" style="background: url('<?php echo get_bloginfo('template_url').'/img/common/header_img.jpg'; ?>')">
        <div class="mask"></div>
    </section>
    <section class="tk-page">
        <div class="container about-page items-group">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="about-img"><img class="img-responsive" src="<?php the_post_thumbnail_url("full") ?>"></div
                ><div class="about-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>
