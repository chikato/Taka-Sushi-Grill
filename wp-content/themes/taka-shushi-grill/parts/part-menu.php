<div id="logo-header" class="col-md-4">
    <a class="logo" href="<?php echo esc_url( get_home_url() ) ?>">
        <span><img class="logo" src="<?php bloginfo('template_url') ?>/img/common/logo.jpg" alt="Logo" /></span>
    </a>
</div>
<div id="nav-header" class="col-md-8 row items-group align-row vertical-center">
    <div class="col-md-10 ">
        <?php
        wp_nav_menu();
        ?>
    </div>
    <div id="social" class="col-md-1 ">
        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
    </div>
</div>
