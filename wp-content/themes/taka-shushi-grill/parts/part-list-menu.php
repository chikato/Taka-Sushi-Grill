<?php

function getMenu($type,$order_by="date") {

    $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1,
        'orderby'=>$order_by,
        'order'=>'DESC');
    return new WP_Query($args);
}
$options = get_option("eto_settings");
$orderBy = $options["eto_sort-menu"];
$food = getMenu("food",$orderBy);
$drink = getMenu("drink",$orderBy);

$num_row = $options['eto_num-row-menu'];
?>
<div class="items container">
    <div class="item-list items-food has-<?php if (is_front_page()) echo $num_row?>-row clearfix">
        <?php
        $num_food_item = 0;
        if( $food->have_posts() ) {
            while ($food->have_posts() && (!is_front_page()  || $num_food_item<$num_row*2)) : $food->the_post(); $num_food_item++; ?>
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
    <div class="item-list hidden has-<?php if (is_front_page()) echo $num_row?>-row items-drink clearfix">
        <?php
        $num_drink_item = 0;

        if( $drink->have_posts() ) {
            while ($drink->have_posts() && (!is_front_page() || $num_drink_item<$num_row*2)) : $drink->the_post(); $num_drink_item++; ?>
                <div class="item col-xs-12 col-sm-12 col-md-6 ">
                    <a class="item-container clearfix" rel="prettyPhoto"
                       href="<?php  /*the_post_thumbnail_url("full")*/ ?>">
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