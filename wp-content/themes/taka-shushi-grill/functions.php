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
        '/js/app.js'
    );
    foreach ($scripts as $key => $url){
        wp_enqueue_script( 'lse-script-'.$key, $path .  $url, array());
    }

    $styles = array(
        '/css/bootstrap.min.css'
    );
    foreach ($styles as $key => $url){
        wp_enqueue_style( 'tsg-style-'.$key, $path .  $url, array());
    }

    wp_enqueue_style( 'tsg-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'tsg_scripts' );