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
        add_action('init', array($this, 'init'), 1);
//        add_menu_page (
//            'Site Settings',
//            'Site Settings',
//            'manage_options',
//            'site_settings',
//            'show_settings',
//            '',
//            '2'
//        );
    }
//
    function init() {
//        if( is_admin() ) {
//            add_action('admin_menu', 'admin_menu');
//            add_action('admin_init', 'register_settings' );
//            add_menu_page('My First Plugin Settings', 'MFPD Settings', 'administrator', __FILE__, 'show_settings',"", 1);
//            add_action( 'admin_init', 'register_settings' );
//        }
    }
//
//    function admin_menu() {
////        add_menu_page(__("Site Settings",'taka'), __("Site Settings",'taka'), 'manage_options', 'taka_settings', false, false, '2');
//        add_menu_page (
//            'Site Settings',
//            'Site Settings',
//            'manage_options',
//            'site_settings',
//            'show_settings',
//            '',
//            '2'
//        );
//    }
//
//    function register_settings() {
//        register_setting('taka-settings', 'taka_address' );
//    }
//
//    function show_settings() {
//
//    }
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