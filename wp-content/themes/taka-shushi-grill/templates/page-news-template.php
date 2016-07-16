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
<div class="block">
    <section class="section bg-img page" style="background: url('<?php echo get_background(); ?>')">
        <div class="mask"></div>
    </section>
    <section class="tk-page">
        <div class="container news-page items-group align-row flex-wrap">
            <?php
                for($i=1;$i<5; $i++) {
            ?>
            <div class="post">
                <a href="" class="items-group vertical-center">
                    <div class="bg-img post-img" style="background: url('<?php echo get_bloginfo('template_url').'/img/content/home/events.jpg'; ?>')">
                        <div class="filter"></div>
                        <time datetime="2014-09-12">12/09</time>
                    </div
                    ><div class="post-content">
                        <div class="post-title">Demter feugiata lecstcies erastoqu eagnis diste </div>
                        <div class="post-des">antdolores rliquam eratvpatis nuytas aledatfena nece. Dabertas kyreasa nytras btreaiastas kerritas nera uisque nulinteger rutrusta.</div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>
