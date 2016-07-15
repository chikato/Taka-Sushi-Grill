<div class="block-menu clearfix">
    <div class="bg-img" style="background: url('<?php echo get_bloginfo('template_url').'/img/content/home/menu_bg.jpg'; ?>')">
        <div class="table">
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
            for($i=0;$i<8;$i++) {
                ?>
                <div class="item col-xs-12 col-sm-12 col-md-6">
                    <a class="item-container clearfix" rel="prettyPhoto" alt="efefewf" title="YAKI-TORI<br>Description" href="<?php echo get_bloginfo('template_url').'/img/content/home/yaki.jpg'; ?>">
                        <div class="item-thumbnail">
                            <img class="img" src="<?php echo get_bloginfo('template_url').'/img/content/home/yaki.jpg'; ?>">
                        </div>
                        <div class="item-info">
                            <div class="item-wrapper">
                                <div class="item-title">YAKI-TORI</div>
                                <div>SpeisekarteSpeisekarte Speisekarte</div>
                            </div>
                        </div>
                        <div class="item-price">
                            <div>
                                <div class="price-label">Preis</div>
                                <div class="price">3.50e</div>
                            </div>
                        </div>
                        <span class="hover-text">NEU</span>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="item-list hidden items-drink"></div>
    </div>
</div>