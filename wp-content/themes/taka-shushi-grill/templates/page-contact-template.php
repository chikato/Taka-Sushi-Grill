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
$google_map = get_field('location');
?>
<div class="block">
    <section class="section bg-img page" style="background: url('<?php echo get_background(); ?>')">
        <div class="mask"></div>
    </section>
    <section class="tk-page">
        <div class="container">
            <div class="contact-map clearfix">
                <div class="map-container col-xs-12 col-md-5"">
                    <div id="gMap"
                         data-lat="<?php echo $google_map['lat'] ? $google_map['lat'] : 0; ?>"
                         data-lng="<?php echo $google_map['lng'] ? $google_map['lng'] : 0; ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 contact-info">
                    <?php echo get_field("contact_info"); ?>
                </div>
            <div class="col-xs-12 col-md-3 contact-form-container">
                <?php echo get_field("contact_form")?>
            </div>
            </div>

        </div>
    </section>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATExYoowEjVke3f-99PHj4M07I5D8hy4M"></script>
<?php get_footer(); ?>
