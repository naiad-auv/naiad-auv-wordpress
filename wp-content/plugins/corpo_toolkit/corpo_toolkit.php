<?php

/*
Plugin Name: Corpo Toolkit
Description: Custom slider & portfolio functionality for Corpo Theme
Version: 1.4
Author: Aleksandra Laczek
Author URI: http://webtuts.pl/themes
License: GPLv2 or later
*/
function corpo_toolkit_activation() {
}
register_activation_hook(__FILE__, 'corpo_toolkit_activation');

function corpo_toolkit_deactivation() {
}
register_deactivation_hook(__FILE__, 'corpo_toolkit_deactivation');

require_once('slider.php');
require_once('portfolio.php');

if(!defined('CORPO_TOOLKIT_PATH')){
	define('CORPO_TOOLKIT_PATH', realpath(plugin_dir_path(__FILE__)) . DIRECTORY_SEPARATOR );
}
if(!defined('CORPO_TOOLKIT_URL')){
	define('CORPO_TOOLKIT_URL', plugin_dir_url(__FILE__) );
}

/*-----------------------------------------------------------------------------------*/
/*	Load scripts & styles
/*-----------------------------------------------------------------------------------*/ 
function corpo_toolkit_enqueue_scripts() {

    wp_enqueue_script('jquery');

    if ( is_front_page() || ( 'corpo_portfolio' == get_post_type() && is_singular() ) ) :
        wp_register_script('flexslider', CORPO_TOOLKIT_URL . 'js/jquery.flexslider-min.js',array(),'',true); // Load in footer
        wp_enqueue_script('flexslider');	
    endif;
}
add_action('wp_enqueue_scripts', 'corpo_toolkit_enqueue_scripts');

function corpo_toolkit_enqueue_styles() {

}
add_action('wp_enqueue_scripts', 'corpo_toolkit_enqueue_styles');

/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/		
// Button
function corpo_shortcode_button($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'color' => 'red',
            'url' => '#',
            'size' => '',
        ), $atts);
        
        if($atts['size'] == 'medium'){
            $atts['size'] = '';
        }
        
        return '<a class="button ' . $atts['color'] .' '. $atts['size'] .'" href="' . $atts['url'] . '" >' .do_shortcode($content). '</a>';
}
add_shortcode('button', 'corpo_shortcode_button');

/*-----------------------------------------------------------------------------------*/
/* Updates
/*-----------------------------------------------------------------------------------*/		    
/* hook updater to init */
add_action( 'init', 'corpo_toolkit_updater_init' );

/**
 * Load and Activate Plugin Updater Class.
 * @since 0.1.0
 */
function corpo_toolkit_updater_init() {

    /* Load Plugin Updater */
    require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . 'includes/plugin-updater.php' );

    /* Updater Config */
    $config = array(
        'base'         => plugin_basename( __FILE__ ), //required
        'repo_uri'     => 'http://webtuts.pl/',
        'repo_slug'    => 'corpo-toolkit'
    );

    /* Load Updater Class */
    new Webtuts_Plugin_Updater( $config );
}    