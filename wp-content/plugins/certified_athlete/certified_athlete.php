<?php

/* Plugin Name: Certified Athlete
  Plugin URI: http://www.certifiedathlete.com/
  Description: Stats And Ranking System for Athletes and Coaches
  Version: 1.0.0
  Author: Cas Valentine
  Author URI: http://www.certifiedathlete.com/
  License: Private
 */
/* * ****************************************
 * Global Variables
 * 
 * **************************************** */
if (!defined('CA_WP_URL'))
    define('CA_WP_URL', get_bloginfo('wpurl'));

if (!defined('CA_THEME_DIR'))
    define('CA_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());

if (!defined('CA_PLUGIN_NAME'))
    define('CA_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));

if (!defined('CA_PLUGIN_DIR'))
    define('CA_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . MYPLUGIN_PLUGIN_NAME);

if (!defined('CA_PLUGIN_URL'))
    define('CA_PLUGIN_URL', WP_PLUGIN_URL . '/' . MYPLUGIN_PLUGIN_NAME);

if (!defined('CA_VERSION_KEY'))
    define('CA_VERSION_KEY', 'CA_version');

if (!defined('CA_VERSION_NUM'))
    define('CA_VERSION_NUM', '1.0.0');

add_option(MYPLUGIN_VERSION_KEY, MYPLUGIN_VERSION_NUM);


/* * ****************************************
 * Includes
 * 
 * **************************************** */



/* * ****************************************
 * Activation/Deactivation
 * 
 * **************************************** */

function certified_athlete_activation() {
    
}

register_activation_hook(__FILE__, 'certified_athlete_activation');

function certified_athlete_deactivation() {
    
}

register_deactivation_hook(__FILE__, 'certified_athlete_deactivation');

/* * ****************************************
 * AJAX action Handler
 * 
 * **************************************** */

add_action('wp_ajax_nopriv_' . $_REQUEST['action'], $_REQUEST['action']); //One call to handle all public ajax forms
// if logged in:

add_action('wp_ajax_' . $_POST['action'], $_POST['action']); //One call to handle all private ajax forms

/* * ****************************************
 * CDN Jquery
 * 
 * **************************************** */
/* JQuery from Google CDN */

function load_jquery_from_google() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://code.jquery.com/jquery-latest.min.js', '', '1.6');
        wp_enqueue_script('jquery');
        //datepicker
        wp_enqueue_script('jquery-ui-datepicker');
        //datepicker style
        wp_enqueue_style('jquery-ui-datepicker', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
    }
}

add_action('init', 'load_jquery_from_google');

/* * ****************************************
 * EnQueue JS
 * 
 * **************************************** */
/* load all js here */

function load_certified_athlete_js() {
    if (!is_admin()) {
        wp_register_script('certified_athlete_js', 'js file location', '', '1.6');
        wp_enqueue_script('certified_athlete_js');
    }
}

add_action('init', 'load_certified_athlete_js');
/* * ****************************************
 * EnQueue Styles
 * 
 * **************************************** */
/* load all css here */

function load_certified_athlete_styles() {
    if (!is_admin()) {
        wp_enqueue_style('link to stylesheet');
    }
}

add_action('init', 'load_certified_athlete_styles');




/* * ****************************************
 *  Add Certified Athlete menu page to Admin Panel
 * 
 * **************************************** */

include_once('ca_admin.php');
$ca_admin = new ca_admin();
?>