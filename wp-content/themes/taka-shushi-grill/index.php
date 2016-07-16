<?php get_header(); ?>
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
                    <div class="btn btn-main">Zur Speisekarte</div>
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