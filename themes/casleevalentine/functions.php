<?php

/* * ****************************************
 * Global Variables and Constants
 * 
 * **************************************** */
if (!defined('CA_WP_URL')) {
    define('CA_WP_URL', get_bloginfo('wpurl'));
}
if (!defined('CA_THEME_DIR')) {
    define('CA_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());
}
if (!defined('CA_PLUGIN_NAME')) {
    define('CA_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));
}
if (!defined('CA_PLUGIN_DIR')) {
    define('CA_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . CA_PLUGIN_NAME);
}
if (!defined('CA_PLUGIN_URL')) {
    define('CA_PLUGIN_URL', WP_PLUGIN_URL . '/' . CA_PLUGIN_NAME);
}
if (!defined('CA_VERSION_KEY')) {
    define('CA_VERSION_KEY', 'CA_version');
}
if (!defined('CA_VERSION_NUM')) {
    define('CA_VERSION_NUM', '1.0.0');
}
add_option(CA_VERSION_KEY, CA_VERSION_NUM);


/* * ****************************************
 * Includes
 * 
 * **************************************** */




/* * ****************************************
 * Declare Support
 * 
 * **************************************** */

add_theme_support('woocommerce');
add_theme_support( 'post-thumbnails' );

/* * ****************************************
 * Activation/Deactivation
 * 
 * **************************************** */

function cv_theme_activation() {
    
}

register_activation_hook(__FILE__, 'cv_theme_activation');

function cv_theme_deactivation() {
    
}

register_deactivation_hook(__FILE__, 'cv_theme_deactivation');


/* * ****************************************
 * Create Custom Post Types
 * 
 * **************************************** */




/* * ****************************************
 * AJAX action Handler
 * 
 * **************************************** */

add_action('wp_ajax_nopriv_' . $_REQUEST['action'], $_REQUEST['action']); //One call to handle all public ajax forms
// if logged in:
add_action('wp_ajax_' . $_POST['action'], $_POST['action']); //One call to handle all private ajax forms


/* * ****************************************
 * Bootstrap Fonts
 * 
 * **************************************** */

function enqueue_bootsrap_fonts() {
    if (!is_admin()) {
        //font awesome
        wp_enqueue_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', null, '');
        //ionicons
        wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.css', null, '');
    }
}

add_action('init', 'enqueue_bootsrap_fonts');
/* * ****************************************
 * Bootstrap CSS
 * 
 * **************************************** */

function enqueue_bootsrap_css() {
    if (!is_admin()) {
        //bootstrap 3.0.2 css
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, '');
        //morris_charts
        wp_enqueue_style('morris_charts', get_template_directory_uri() . '/morris/morris.css', null, '');
        //jvectormap
        wp_enqueue_style('jvector_map', get_template_directory_uri() . '/css/jvectormap/jquery-jvectormap-1.2.2.css', null, '');
        //fullcalendar
        wp_enqueue_style('fullcalendar', get_template_directory_uri() . '/css/fullcalendar/fullcalendar.css', null, '');
        //daterange_picker
        wp_enqueue_style('daterange_picker', get_template_directory_uri() . '/css/daterangepicker/daterangepicker-bs3.css', null, '');
        //WYSIHTML5 css
        wp_enqueue_style('wysihtml', get_template_directory_uri() . '/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', null, '');
        //Bootstrap Overrides
        wp_enqueue_style('bootstrap_overrides', get_template_directory_uri() . '/css/bootstrap_overrides.css', null, '');
        //grayscale.css
        wp_enqueue_style('grayscale_css', get_template_directory_uri() . '/css/grayscale.css', null, '');
    }
}

add_action('init', 'enqueue_bootsrap_css');


/* * ****************************************
 * Bootstrap JS
 * 
 * **************************************** */

function enqueue_bootsrap_js() {
    if (!is_admin()) {

//        wp_deregister_script('jquery');
//
//        //<!--jQuery 2.0.2-->
//        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', '', '1.8.3');
//        wp_enqueue_script('jquery');

        //<!--jQuery UI 1.10.3-->
//        wp_register_script('google_jquery_ui_js', get_template_directory_uri() . '/js/jquery-ui-1.10.3.min.js', '', '');
//        wp_enqueue_script('google_jquery_ui_js');
        //<!-- Bootstrap -->
        wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', '', '');
        wp_enqueue_script('bootstrap_js');


        //<!-- Morris.js charts -->
        wp_register_script('morris_raphael_js', '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js', '', '');
        wp_enqueue_script('morris_raphael_js');
        wp_register_script('morris_charts_js', get_template_directory_uri() . '/js/plugins/morris/morris.min.js', '', '');
        wp_enqueue_script('morris_charts_js');


        //<!-- Flot charts -->
        wp_register_script('flot_chart_js', get_template_directory_uri() . '/js/plugins/flot/jquery.flot.min.js', '', '');
        wp_enqueue_script('flot_chart_js');
        wp_register_script('flot_resize_chart_js', get_template_directory_uri() . '/js/plugins/flot/jquery.flot.resize.min.js', '', '');
        wp_enqueue_script('flot_resize_chart_js');
        wp_register_script('flot_pie_chart_js', get_template_directory_uri() . '/js/plugins/flot/jquery.flot.pie.min.js', '', '');
        wp_enqueue_script('flot_pie_chart_js');
        wp_register_script('flot_chart_category_js', get_template_directory_uri() . '/js/plugins/flot/jquery.flot.categories.min.js', '', '');
        wp_enqueue_script('flot_chart_category_js');

        //<!-- Sparkline -->
        wp_register_script('sparkline_js', get_template_directory_uri() . '/js/plugins/sparkline/jquery.sparkline.min.js', '', '');
        wp_enqueue_script('sparkline_js');

        //<!-- jvectormap -->
        wp_register_script('jvectormap_js', get_template_directory_uri() . '/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', '', '');
        wp_enqueue_script('jvectormap_js');

        wp_register_script('jvectormap_world_js', get_template_directory_uri() . '/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', '', '');
        wp_enqueue_script('jvectormap_world_js');

        //<!-- fullCalendar -->
        wp_register_script('fullcalendar_js', get_template_directory_uri() . '/js/plugins/fullcalendar/fullcalendar.min.js', '', '');
        wp_enqueue_script('fullcalendar_js');

        //<!-- jQuery Knob Chart -->
        wp_register_script('jquery_knob_js', get_template_directory_uri() . '/js/plugins/jqueryKnob/jquery.knob.js', '', '');
        wp_enqueue_script('jquery_knob_js');

        //<!-- daterangepicker -->
        wp_register_script('daterangepicker_js', get_template_directory_uri() . '/js/plugins/daterangepicker/daterangepicker.js', '', '');
        wp_enqueue_script('daterangepicker_js');

        //<!-- Bootstrap WYSIHTML5 -->
        wp_register_script('wysihtml5_js', get_template_directory_uri() . '/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', '', '');
        wp_enqueue_script('wysihtml5_js');

        //<!-- iCheck -->
        wp_register_script('icheck_js', get_template_directory_uri() . '/js/plugins/iCheck/icheck.min.js', '', '');
        wp_enqueue_script('icheck_js');

         // For use on the Front end (ie. Theme)
        wp_register_script('casleevalentine_js', get_template_directory_uri() . '/js/casleevalentine.js', '', '');
        wp_enqueue_script('casleevalentine_js');
        
        // For use on the Front end (ie. Theme)
        wp_register_script('easing_js', get_template_directory_uri() . '/js/easing.js', '', '');
        wp_enqueue_script('easing_js');
        
        //<!--Google Map - Load before the js taht calls the map-->
        wp_register_script('g_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false', '', '');
        wp_enqueue_script('g_map');

        // For use on the Front end (ie. Theme)
        wp_register_script('grayscale_js', get_template_directory_uri() . '/js/grayscale.js', '', '');
        wp_enqueue_script('grayscale_js');

//        //<!-- AdminLTE for demo purposes -->
//        wp_register_script('admin_lte_demo_js', get_template_directory_uri() . '/js/AdminLTE/demo.js', '', '');
//        wp_enqueue_script('admin_lte_demo_js');
//        //<!-- AdminLTE App -->
//        wp_register_script('admin_lte_app_js', get_template_directory_uri() . '/js/AdminLTE/app.js', '', '');
//        wp_enqueue_script('admin_lte_app_js');//
//        //<!-- AdminLTE dashboard demo (This is only for demo purposes) --> 
//        wp_register_script('admin_lte_dashboard_demo_js', get_template_directory_uri() . '/js/AdminLTE/dashboard.js', '', '');
//        wp_enqueue_script('admin_lte_dashboard_demo_js');
    }
}

add_action('wp_footer', 'enqueue_bootsrap_js');



/* * ****************************************
 *  Add Certified Athlete menu page to Admin Panel
 * 
 * **************************************** */
