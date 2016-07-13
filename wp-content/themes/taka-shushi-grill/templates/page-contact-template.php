<?php
/**
 * Template Name: Page Contact template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
$options = get_option("eto_settings");
?>
<div class="block">
    <section class="section banner bg-img page" style="background: url('<?php echo get_bloginfo('template_url').'/img/common/header_img.jpg'; ?>')">
        <div class="mask"></div>
    </section>
    <section class="contact-page">
        <div class="container">
            <div class="contact-map clearfix">
                <div id="gMap" class="col-md-7"></div>
                <div class="col-md-4 contact-info col-md-offset-1">
                    <h2>Contact Info</h2>
                    <p><i class="fa fa-map-marker"></i><span><?php echo $options['eto_address'];?></span></p>
                    <p><i class="fa fa-phone"></i><span><?php echo $options['eto_phone'];?></span></p>
                    <p><i class="fa fa-envelope-o"></i><span><?php echo $options['eto_email'];?></span></p>
                </div>
            </div>
            <div class="contact-form-container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<?php get_footer(); ?>
