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
    <section class="section banner bg-img page" style="background: url('<?php echo get_bloginfo('template_url').'/img/common/header_img.jpg'; ?>')">
        <div class="mask"></div>
    </section>
    <section class="news-page">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>
