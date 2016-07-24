<?php
/**
 * The template for displaying all single posts and attachments
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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
        <section id="newsPage" class="tk-page">
            <div class="container default-page items-group">
                <div class="page-img"><img class="img-responsive" src="<?php echo get_field("post_image"); ?>"></div
                ><div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
