<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 */


get_header();
?>
<div class="block">
    <section class="section banner bg-img" style="background: url('<?php echo get_background(); ?>')">
        <div class="mask fp-table">
            <div class="fp-tableCell">
                <div class="content container">
                    <h1 class="title">TAKA</h1>
                    <div class="sub-title">
                        <p class="line"></p>
                        <p class="text">shushi & grill</p>
                        <p class="line"></p>
                    </div>
                    <a class="btn btn-main" href="<?php echo get_permalink( get_page_by_path( 'speisekarte' ) ); ?>">Zur Speisekarte</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <?php get_template_part("parts/part", "home-news"); ?>
        <?php get_template_part("parts/part", "home-category"); ?>
    </section>
</div>
<?php get_footer(); ?>