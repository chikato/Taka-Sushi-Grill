<?php

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
<div class="items container">
    <div class="item-list items-food clearfix">
        <?php
        if( $food->have_posts() ) {
            while ($food->have_posts()) : $food->the_post(); ?>
                <div class="item col-xs-12 col-sm-12 col-md-6">
                    <a class="item-container clearfix" rel="prettyPhoto"
                       href="<?php the_post_thumbnail_url("full"); ?>">
                        <div class="item-thumbnail">
                            <img class="img"
                                 src="<?php the_post_thumbnail_url(); ?>">
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