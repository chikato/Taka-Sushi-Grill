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
        'name'          => esc_html__( 'Newsletter SideBar', 'tsg' ),
        'id'            => 'newsletter-sidebar',
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
        '/css/jquery.fullPage.css',
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

function post_pagination($numpages = '', $pagerange = '', $paged='') {

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    /**
     * This first part of our function is a fallback
     * for custom pagination inside a regular loop that
     * uses the global $paged and global $wp_query variables.
     *
     * It's good because we can now override default pagination
     * in our theme, and use this function in default quries
     * and custom queries.
     */
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }

    /**
     * We construct the pagination arguments to enter into our paginate_links
     * function.
     */
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => False,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => True,
        'prev_text'       => __('&laquo;'),
        'next_text'       => __('&raquo;'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo "<nav class='custom-pagination'>";
//        echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
        echo $paginate_links;
        echo "</nav>";
    }

}
add_filter( 'manage_posts_columns', 'managing_my_posts_columns', 10, 2 );
function managing_my_posts_columns( $columns, $post_type ) {
    if ( $post_type == 'food' || $post_type == 'drink' )
        $columns[ 'item_type' ] = 'Item Type';
    return $columns;
}
add_action( 'manage_posts_custom_column', 'populating_my_posts_columns', 10 , 2 );
function populating_my_posts_columns( $column_name, $post_id ) {
    switch( $column_name ) {
        case 'item_type':
            echo '<div id="item_type-' . $post_id . '" data-value="' . get_post_meta( $post_id, 'item_type', true )  .' " >' . get_post_meta( $post_id, 'item_type', true ) . '</div>';
            break;
    }
}

add_action( 'bulk_edit_custom_box', 'add_to_bulk_quick_edit_custom_box', 10, 2 );
add_action( 'quick_edit_custom_box', 'add_to_bulk_quick_edit_custom_box', 10, 2 );
function add_to_bulk_quick_edit_custom_box( $column_name, $post_type ) {

    if ($post_type == 'food' || $post_type == 'drink') {
        switch( $column_name ) {
            case 'item_type':
                ?><fieldset class="inline-edit-col-right">
                <div class="inline-edit-group">
                    <label>
                        <span class="title">New item</span>
                        <input type="checkbox" name="item_type" value="" />
                    </label>
                </div>
            </fieldset><?php
                break;
        }

    }
}

add_action( 'admin_print_scripts-edit.php', 'enqueue_edit_scripts' );
function enqueue_edit_scripts() {
    wp_enqueue_script( 'admin-edit', get_bloginfo( 'stylesheet_directory' ) . '/quick_edit.js', array( 'jquery', 'inline-edit-post' ), '', true );
}

add_action( 'save_post','save_post', 10, 2 );
function save_post( $post_id, $post ) {

    // don't save for autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $post_id;

    // dont save for revisions
    if ( isset( $post->post_type ) && $post->post_type == 'revision' )
        return $post_id;

    if( ($post->post_type == 'food') || ($post->post_type == 'drink') ) {


            // release date
            // Because this action is run in several places, checking for the array key keeps WordPress from editing
            // data that wasn't in the form, i.e. if you had this post meta on your "Quick Edit" but didn't have it
            // on the "Edit Post" screen.
            if ( array_key_exists( 'item_type', $_POST ) )
                update_post_meta( $post_id, 'item_type', $_POST[ 'item_type' ] );



    }

}

add_action( 'wp_ajax_save_bulk_edit', 'save_bulk_edit' );
function save_bulk_edit() {
    // get our variables
    $post_ids = ( isset( $_POST[ 'post_ids' ] ) && !empty( $_POST[ 'post_ids' ] ) ) ? $_POST[ 'post_ids' ] : array();
    $item_type = ( isset( $_POST[ 'item_type' ] ) && !empty( $_POST[ 'item_type' ] ) ) ? $_POST[ 'item_type' ] : NULL;
    // if everything is in order
    if ( !empty( $post_ids ) && is_array( $post_ids ) && !empty( $item_type ) ) {
        foreach( $post_ids as $post_id ) {
            update_post_meta( $post_id, 'item_type', $item_type );
        }
    }
}

function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyATExYoowEjVke3f-99PHj4M07I5D8hy4M';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
