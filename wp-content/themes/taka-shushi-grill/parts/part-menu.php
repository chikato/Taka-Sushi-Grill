<div id="logo-header" class="col-md-4 hidden-sm hidden-xs">
    <a class="logo" href="<?php echo esc_url( get_home_url() ) ?>">
        <span><img class="logo" src="<?php bloginfo('template_url') ?>/img/common/logo.jpg" alt="Logo" /></span>
    </a>
</div>
<div id="nav-header" class="nav-header hidden-sm hidden-xs col-md-8 row items-group align-row vertical-center">
    <div class="">
        <?php
        wp_nav_menu();
        ?>
    </div>
    <div id="social" class="">
        <span><a target="_blank" href="<?php echo get_option("eto_settings")['eto_facebook']; ?>"><i class="fa fa-facebook"></i></a></span>
    </div>
</div>

<div id="mobile-nav-header" class="nav-header visible-xs-block visible-sm-block items-group align-row align-start vertical-top">
    <div class="items-group align-column">
        <div id="social">
            <span><a target="_blank" href="<?php echo get_option("eto_settings")['eto_facebook']; ?>"><i class="fa fa-facebook"></i></a></span>
        </div>
            <?php
            wp_nav_menu();
            ?>
    </div>
</div>


<!--<div id="menu-button" class="menu-button visible-xs-block visible-sm-block"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div>
-->
