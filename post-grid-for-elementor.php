<?php

/*
Plugin Name: Post Grid for Elementor & Product Grid | PowerGrids
Plugin URI: 
Description: This plugin extend Elementor by adding the Post Grid addon/widget and also the Woocommerce Product Grid widget for free!
Author: PWR Plugins
Version: 1.1.2
Author URI: https://pwrplugins.com
*/
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'pwgd_fs' ) ) {
    // Create a helper function for easy SDK access.
    function pwgd_fs() {
        global $pwgd_fs;

        if ( ! isset( $pwgd_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $pwgd_fs = fs_dynamic_init( array(
                'id'                  => '8332',
                'slug'                => 'post-grid-for-elementor',
                'type'                => 'plugin',
                'public_key'          => 'pk_d2b4724aa8dc68d13a1113ff81492',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'first-path'     => 'plugins.php',
                ),
            ) );
        }

        return $pwgd_fs;
    }

    // Init Freemius.
    pwgd_fs();
    // Signal that SDK was initiated.
    do_action( 'pwgd_fs_loaded' );
}

/*
* Plugin Options
*/
//require 'includes/panel.php';
/*
* Plugin Functions
*/
require 'includes/functions.php';
/*
* Elementor
*/
require 'includes/extend-elementor.php';
/*
* Plugin Directory
*/
function pwgd_get_plugin_directory_url() {
    return plugin_dir_url(__FILE__);
}