<?php
/**
 * Template Name: Page Menu template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();

function getMenu($type) {
    $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1);

    return new WP_Query($args);
}

$food = getMenu("food");
$drink = getMenu("drink");
?>
<div class="block">
    <section class="section block-menu">
        <div class="bg-img" style="background: url('<?php echo get_bloginfo('template_url').'/img/content/home/menu_bg.jpg'; ?>')">
            <div class="mask table">
                <div class="table-cell">
                    <div class="container">
                        <h2 class="mn-sub-title">ein Blick in die</h2>
                        <h1 class="mn-title">Speisekarte</h1>
                    </div>
                </div>
            </div>
            <div class="category container">
                <div class="col-xs-6 col-sm-6 col-md-6 mn-food active">
                    <div class="table">
                        <div class="table-cell food">
                            <div class="menu-icon food-icon">
                                <img class="img" src="<?php echo get_bloginfo('template_url').'/img/content/home/noodles.png'; ?>">
                            </div>
                            <div class="text food-text hidden-xs">
                                <h4 class="menu-title">ESSEN</h4>
                                <p class="food-text">Asiatische Küche</p>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-hover"></div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 mn-drink">
                    <div class="table">
                        <div class="table-cell drink">
                            <div class="menu-icon drink-icon">
                                <img class="img" src="<?php echo get_bloginfo('template_url').'/img/content/home/wine.png'; ?>">
                            </div>
                            <div class="text drink-text hidden-xs">
                                <h5 class="menu-title">TRINKEN</h5>
                                <p class="food-text">Erfrischungsgetränke & Tee</p>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-hover"></div>
                </div>
            </div>
        </div>
        <div class="items container">
            <div class="item-list items-food clearfix">
                <?php
                if( $food->have_posts() ) {
                    while ($food->have_posts()) : $food->the_post(); ?>
                        <div class="item col-xs-12 col-sm-12 col-md-6">
                            <a class="item-container clearfix" rel="prettyPhoto"
                               href="<?php the_post_thumbnail_url("full") ?>">
                                <div class="item-thumbnail">
                                    <img class="img"
                                         src="<?php the_post_thumbnail_url() ?>">
                                </div>
                                <div class="item-info">
                                    <div class="item-wrapper">
                                        <div class="item-title"><?php the_title(); ?></div>
                                        <div><?php echo get_field("item_description"); ?></div>
                                    </div>
                                </div>
                                <div class="item-price">
                                    <div>
                                        <div class="price-label">Preis</div>
                                        <div class="price"><?php echo get_field("item_price"); ?></div>
                                    </div>
                                </div>
                                <span class="hover-text">NEU</span>
                            </a>
                        </div>
                <?php
                    endwhile;
                }
                ?>
            </div>
            <div class="item-list hidden items-drink clearfix">
                <?php
                if( $drink->have_posts() ) {
                    while ($drink->have_posts()) : $drink->the_post(); ?>
                        <div class="item col-xs-12 col-sm-12 col-md-6">
                            <a class="item-container clearfix" rel="prettyPhoto"
                               href="<?php the_post_thumbnail_url("full") ?>">
                                <div class="item-thumbnail">
                                    <img class="img"
                                         src="<?php the_post_thumbnail_url() ?>">
                                </div>
                                <div class="item-info">
                                    <div class="item-wrapper">
                                        <div class="item-title"><?php the_title(); ?></div>
                                        <div><?php echo get_field("item_description"); ?></div>
                                    </div>
                                </div>
                                <div class="item-price">
                                    <div>
                                        <div class="price-label">Preis</div>
                                        <div class="price"><?php echo get_field("item_price"); ?></div>
                                    </div>
                                </div>
                                <span class="hover-text">NEU</span>
                            </a>
                        </div>
                        <?php
                    endwhile;
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
