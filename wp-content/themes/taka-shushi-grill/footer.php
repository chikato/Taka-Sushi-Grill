<?php
    $options = get_option("eto_settings");
?>
<footer id="footer" class="footer">
    <div class="newsletter table tk-container">
            <div class="table-cell">
                <label>registrieren sie sich für den newsletter</label>
                <input type="text" value="" class="form-control">
                <button class="btn btn-black">REGISTRIEREN</button>
            </div>
        </div>
    <div class="footer-bottom">
        <div class="footer-mask">
            <div class="footer-logo">
                <a href="<?php echo esc_url( get_home_url() ) ?>">
                    <img class="logo" src="<?php echo get_bloginfo('template_url').'/img/common/logo.jpg'; ?>">
                </a>
            </div>
            <div class="footer-info container">
                <div class="location"><i class="fa fa-map-marker"></i></div>
                <p class="address"><?php echo $options['eto_address'];?></p>
                <p class="telephone"><?php echo $options['eto_phone'];?></p>
                <p class="email"><?php echo $options['eto_email'];?></p>
            </div>
            <div class="footer-social"><a target="_blank" href="<?php echo $options['eto_facebook'];?>"><i class="fa fa-facebook"></i></a></div>
        </div>
    </div>
</footer>
</div></div></div>
<?php wp_footer(); ?>
</body> <!--end body-->
</html> <!--end html -->