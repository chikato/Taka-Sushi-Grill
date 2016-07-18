<?php
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );

//    require_once( CORE . '/init.php' );

if ( ! function_exists( 'tsg_setup' ) ) :

    function tsg_setup() {
        load_theme_textdomain( 'tsg', THEME_URL . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( 'post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );
        add_theme_support( 'custom-background', apply_filters( 'lse_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'tsg' )
        ) );
    }
    add_action ( 'init', 'tsg_setup' );

    add_editor_style( array( 'css/editor-style.css' ) );

endif;

function tsg_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Content SideBar', 'tsg' ),
        'id'            => 'main-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget instagram %2$s">',
        'after_widget'  => '</div>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Contact SideBar', 'tsg' ),
        'id'            => 'contact-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget contact-btn %2$s">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'tsg_widgets_init' );

function tsg_scripts() {
    // add wordpress jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');

    $path = get_template_directory_uri();

    // custom js
    $scripts = array(
//        '/js/lib/scrolloverflow.min.js',
//        '/js/lib/jquery.fullPage.min.js',
        '/js/lib/jquery.countdown.js',
        '/js/app.js'
    );
    foreach ($scripts as $key => $url){
        wp_enqueue_script( 'lse-script-'.$key, $path .  $url, array());
    }

    $styles = array(
        '/css/bootstrap.min.css',
//        '/css/jquery.fullPage.css',
        '/css/font-awesome.min.css'
    );
    foreach ($styles as $key => $url){
        wp_enqueue_style( 'tsg-style-'.$key, $path .  $url, array());
    }

    wp_enqueue_style( 'tsg-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'tsg_scripts' );

function add_theme_option() {
    global $taka_options;
    $taka_options = get_option("eto_settings");
}
add_action( 'wp_head', 'add_theme_option' );

function get_background($id=null) {

    // check to see if the theme supports Featured Images, and one is set
    if ($id && current_theme_supports( 'post-thumbnails' ) && has_post_thumbnail( $id)) {

        // specify desired image size in place of 'full'
        $page_bg_image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full' );
        $page_bg_image_url = $page_bg_image[0]; // this returns just the URL of the image

    } else {
        // the fallback – our current active theme's default bg image
        $page_bg_image_url = get_background_image();
    }

    return $page_bg_image_url ? $page_bg_image_url : get_bloginfo('template_url').'/img/common/header_img.jpg';
}