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