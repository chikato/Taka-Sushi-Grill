<?php get_header(); ?>
<div class="block">
    <section class="section banner bg-img" style="background: url('<?php echo get_bloginfo('template_url').'/img/common/header_img.jpg'; ?>')">
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
        <div class="events clearfix">
            <div class="event-header col-md-12">
                <h4>bevorstehende</h4>
                <h3>VERANSTALTUNGEN</h3>
            </div>
            <div class="event-content container-fluid">
                <div class="col-md-5 col-md-offset-1">
<!--                    <img src="--><?php //echo get_bloginfo('template_url').'/img/content/home/events.jpg'; ?><!--">-->
                    <div class="event-img" style="background: url('<?php echo get_bloginfo('template_url').'/img/content/home/events.jpg'; ?>')"></div>
                </div>
                <div class="col-md-3">
                    <h4 class="h4">Neueröffnung</h4>
                    <p>Lorem ipsum dolor sit amet,  consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  sed diam voluptua.</p>
                    <p class="event-time">am 01.09.2016 um 12:30 Uhr</p>
                </div>
                <div class="col-md-2 event-date clearfix">
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num day">06</p>
                            <p class="des">Tage</p>
                        </div>
                    </div>
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num hour">16</p>
                            <p class="des">Studen</p>
                        </div>
                    </div>
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num minute">11</p>
                            <p class="des">Minuten</p>
                        </div>
                    </div>
                    <div class="ed-col">
                        <div class="date-content">
                            <p class="num second">58</p>
                            <p class="des">Sekunden</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-menu clearfix">
            <div class="bg-img" style="background: url('<?php echo get_bloginfo('template_url').'/img/content/home/menu_bg.jpg'; ?>')">
                <div class="container table">
                    <div class="table-cell">
                        <h4>ein Blick in die</h4>
                        <h2>Speisekarte</h2>
                    </div>
                </div>
                <div class="category container-fluid">
                    <div class="col-md-5 col-md-offset-1">
                        <div class="table">
                            <div class="table-cell clearfix food">
                                <div class="food-icon"></div>
                                <div class="text food-text">
                                    <h5 class="menu-title">ESSEN</h5>
                                    <p class="food-text">Asiatische Küche</p>
                                </div>
                            </div>
                        </div>
                        <div class="arrow-hover"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="table">
                            <div class="table-cell clearfix drink">
                                <div class="drink-icon"></div>
                                <div class="text drink-text">
                                    <h5 class="menu-title">TRINKEN</h5>
                                    <p class="food-text">Erfrischungsgetränke & Tee</p>
                                </div>
                            </div>
                        </div>
                        <div class="arrow-hover"></div>
                    </div>
                </div>
            </div>
            <div class="items container-fluid">
                <div class="items-food col-md-offset-1 clearfix">
                    <?php
                    for($i=0;$i<8;$i++) {
                    ?>
                    <div class="item col-md-5">
                        <div class="item-container clearfix">
                            <div class="item-thumbnail">
                                <img class="img" src="<?php echo get_bloginfo('template_url').'/img/content/home/yaki.jpg'; ?>">
                            </div>
                            <div class="item-info">
                                <div>
                                    <div>YAKI-TORI</div>
                                    <div>SpeisekarteSpeisekarte Speisekarte</div>
                                </div>
                            </div>
                            <div class="item-price">
                                <div>
                                    <div class="price-label">Preis</div>
                                    <div>3.50e</div>
                                </div>
                            </div>
                            <span class="hover-text">NEU</span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="hidden items-drink col-md-offset-1"></div>
            </div>
        </div>
        <?php get_footer(); ?>
    </section>
</div>
