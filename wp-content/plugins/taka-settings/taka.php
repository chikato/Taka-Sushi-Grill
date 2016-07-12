<?php
/*
Plugin Name: Taka Settings
Description: Customise Taka theme
Version: 1.0
Author: Chikato
Copyright: Chikato
*/

if( !class_exists('taka') ):
    
class taka {
    function __construct() {
        add_action('init', array($this, 'init'));
    }
//
    function init() {
        if(is_admin()) {
            add_action('admin_menu', array($this, 'taka_admin_menu'));
            add_action('admin_init', array($this, 'register_settings'));
        }
    }

    function taka_admin_menu() {
        add_menu_page (
            'Site Settings',
            'Site Settings',
            'manage_options',
            'taka_settings',
            array($this, 'create_admin_page'),
            '',
            '2'
        );
    }

    function register_settings() {
        register_setting(
            'taka_options',
            'taka_address',
            array( $this, 'sanitize' ) // Sanitize
        );

        register_setting(
            'taka_options',
            'taka_phone',
            array( $this, 'sanitize' ) // Sanitize
        );

        register_setting(
            'taka_options',
            'taka_facebook_url',
            array( $this, 'sanitize' ) // Sanitize
        );

    }

    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['id_number'] ) )
            $new_input['id_number'] = absint( $input['id_number'] );

        if( isset( $input['title'] ) )
            $new_input['title'] = sanitize_text_field( $input['title'] );

        return $new_input;
    }

    function create_admin_page() {

    }
}
//
function taka() {
    global $taka;
    $taka = new taka();
}

taka();
//
endif; // class_exists check

?>