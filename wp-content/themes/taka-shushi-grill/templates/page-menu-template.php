<?php
/**
 * Template Name: Page Menu template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

?>
<div class="block">
    <section class="section block-menu">
        <?php get_template_part("parts/part", "header-menu") ?>
        <?php get_template_part("parts/part", "list-menu") ?>
    </section>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
