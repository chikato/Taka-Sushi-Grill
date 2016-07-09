<div id="logo-header" class="col-md-6">
    <a class="logo" href="<?php echo esc_url( get_home_url() ) ?>">
        <span><img src="<?php bloginfo('template_url') ?>/img/common/logo.jpg" alt="Logo" /></span>
    </a>
</div>
<div class="col-md-6">
    <?php
    wp_nav_menu();
    ?>
</div>