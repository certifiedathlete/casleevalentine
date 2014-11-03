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
 * Global Variables and Constants
 * 
 * **************************************** */
if (!defined('CA_WP_URL'))
    define('CA_WP_URL', get_bloginfo('wpurl'));

if (!defined('CA_THEME_DIR'))
    define('CA_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());

if (!defined('CA_PLUGIN_NAME'))
    define('CA_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));

if (!defined('CA_PLUGIN_DIR'))
    define('CA_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . CA_PLUGIN_NAME);

if (!defined('CA_PLUGIN_URL'))
    define('CA_PLUGIN_URL', WP_PLUGIN_URL . '/' . CA_PLUGIN_NAME);

if (!defined('CA_VERSION_KEY'))
    define('CA_VERSION_KEY', 'CA_version');

if (!defined('CA_VERSION_NUM'))
    define('CA_VERSION_NUM', '1.0.0');

add_option(CA_VERSION_KEY, CA_VERSION_NUM);

if (!defined('CA_TEXT_DOMIAN'))
    define('CA_TEXT_DOMIAN', CA_TEXT_DOMIAN);



/* * ****************************************
 * Includes
 * 
 * **************************************** */




/* * ****************************************
 * Declare Support
 * 
 * **************************************** */

add_theme_support('woocommerce');
add_theme_support('certified_athlete');


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
 * Create Custom Post Types
 * 
 * **************************************** */
include_once(CA_PLUGIN_DIR . '/library/CA_Custom_Post_Type.php');
include_once(CA_PLUGIN_DIR . '/library/CA_Custom_Meta_Box.php');


//include each section below in its own class file
$ca_organization_settings = array();
$ca_organization = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_organization->create_ca_post_type('ca_organization', 'Organization', 'Organizations', $ca_organization_settings);

$ca_organization_meta_box_variables = array(
    
    'name' => 'ca_organization_name',
    'ca_organization_name' => 'Organization Name',
    'ca_organization_address' => 'Address',
    'ca_organization_date_founded' => 'Date Founded',
    'headline' => 'Organization Details',
    
);

$ca_organization_meta = new CA_Custom_Meta_Box('ca_organization', CA_TEXT_DOMIAN, $ca_organization_meta_box_variables);

$ca_team_settings = array();
$ca_team = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_team->create_ca_post_type('ca_team', 'Team', 'Teams', $ca_team_settings);

$ca_member_settings = array();
$ca_member = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_member->create_ca_post_type('ca_member', 'Member', 'Members', $ca_member_settings);

$ca_event_settings = array();
$ca_event = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_event->create_ca_post_type('ca_event', 'Event', 'Events', $ca_event_settings);

$ca_swag_settings = array();
$ca_swag = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_swag->create_ca_post_type('ca_swag', 'Swag', 'Swag', $ca_swag_settings);

$ca_sports_rank_settings = array();
$ca_sports_rank = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_sports_rank->create_ca_post_type('ca_sports_rank', 'Sports Rank', 'Sports Rank', $ca_sports_rank_settings);

$ca_sports_stats_settings = array();
$ca_sports_stats = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_sports_stats->create_ca_post_type('ca_sports_stats', 'Sports Stats', 'Sports Stats', $ca_sports_stats_settings);

$ca_content_slide_settings = array();
$ca_content_slide = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_content_slide->create_ca_post_type('ca_content_slide', 'Content Slide', 'Content Slides', $ca_content_slide_settings);

$ca_summary_settings = array();
$ca_summary = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_summary->create_ca_post_type('ca_summary', 'Summary', 'Summaries', $ca_summary_settings);

$ca_tip_settings = array();
$ca_tip = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_tip->create_ca_post_type('ca_tip', 'Tip', 'Tips', $ca_tip_settings);

$ca_location_settings = array();
$ca_location = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_location->create_ca_post_type('ca_location', 'Location', 'Locations', $ca_location_settings);

$ca_business_settings = array();
$ca_business = new CA_Custom_Post_Type(CA_TEXT_DOMIAN);
$ca_business->create_ca_post_type('ca_business', 'Business', 'Businesses', $ca_business_settings);


/* * ****************************************
 * AJAX action Handler
 * 
 * **************************************** */

add_action('wp_ajax_nopriv_' . $_REQUEST['action'], $_REQUEST['action']); //One call to handle all public ajax forms
// if logged in:
add_action('wp_ajax_' . $_POST['action'], $_POST['action']); //One call to handle all private ajax forms


/* * ****************************************
 * EnQueue JS
 * 
 * **************************************** */
/* load all js here */

function load_certified_athlete_js() {
    if (!is_admin()) {
        wp_register_script('certified_athlete_js', CA_PLUGIN_URL .'/js/certified_athlete_ajax.js', '', '');
        wp_enqueue_script('certified_athlete_js');
    }
}

add_action('wp_footer', 'load_certified_athlete_js');
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
//instantiate the admin object
//include if else for acces management
include_once('ca_admin.php');
$ca_admin = new ca_admin();
?>