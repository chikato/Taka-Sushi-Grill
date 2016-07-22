<?php
function getLastEvent($type)
{
    $args = array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'caller_get_posts' => 1,
        'orderby' => 'date',
        'order' => 'DESC');
    return new WP_Query($args);
}

$event = getLastEvent("event");

if ($event->have_posts()) {
    $event->the_post();
    
    $timestamp = get_field("time_event") ? get_field("time_event") : time() + (24*60*60) ;
    $date_event = strftime("%m.%d.%Y", $timestamp);
    $time_event = strftime("%H:%M", $timestamp);
    $time_full = strftime("%Y/%m/%d/%H:%M:%S", $timestamp);
    ?>
    <div class="events clearfix">
        <div class="event-header col-md-12">
            <h2>bevorstehende</h2>
            <h1>VERANSTALTUNGEN</h1>
        </div>
        <div class="event-content container">
            <div class="col-md-5 col-lg-6 hidden-xs hidden-sm">
                <!--                    <img src="-->
                <?php //echo get_bloginfo('template_url').'/img/content/home/events.jpg'; ?><!--">-->
                <div class="event-img"
                     style="background: url('<?php echo get_field("event_thumbnail"); ?>')"></div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                <h4 class="h4"><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
                <!--            <p class="event-time">am 01.09.2016 um 12:30 Uhr</p>-->
                <p class="event-time"> am <?php echo $date_event ?> um <?php echo $time_event ?> Uhr</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 event-date clearfix">
                <div class="event-cover" data-time="<?php echo $time_full ?>">
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num days"></p>
                            <p class="des">Tage</p>
                        </div>
                    </div>
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num hours"></p>
                            <p class="des">Stunden</p>
                        </div>
                    </div>
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num minutes"></p>
                            <p class="des">Minuten</p>
                        </div>
                    </div>
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num seconds"></p>
                            <p class="des">Sekunden</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>