<?php
/*
	Plugin Name: d4
	Plugin URI: https://github.com/d4advancedmedia/
	GitHub Theme URI: https://github.com/d4advancedmedia/
	GitHub Branch: master
<<<<<<< HEAD
	Description: Styles and functionality added by D4
	Version: 3Mar17
=======
	Description: D4 Base Plugin
	Version:
>>>>>>> parent of 4678aba... Added versioning variables
	Author: D4 Adv. Media
	License: GPL2
*/

<<<<<<< HEAD
// Prevent direct access	
defined( 'ABSPATH' ) or die( 'No direct access!' );

// Update this version number in the description area as well for cache busting
$d4baseplugin_version = '3Mar2017';


/* 
------------------------- Includes ---------------------- 

Uncomment includes in this section to include portions of
the base plugin library or the custom library 

*/

//Custom Library - Used for customizing on a per-site basis. Have a unique function to add to a site? Use this directory. Think of it as the old base plugin and customize away.
include ('custom/custom.php');

//Post Types - DO NOT CUSTOMIZE
include ('lib/posttype_testimonial.php');
include ('lib/posttype_brand.php');
include ('lib/posttype_staffmember.php');

//Shortcodes - DO NOT CUSTOMIZE
include ('lib/shortcode_getpost.php');
include ('lib/shortcode_button.php');
include ('lib/shortcode_carousel.php');//Requires D4am Slider
include ('lib/shortcode_googlemap.php');

=======
// Register and enqueue font-end plugin style sheets and scripts.
add_action( 'wp_enqueue_scripts', 'register_d4_elements' );
function register_d4_elements() {
	wp_register_style( 'd4', plugins_url( 'css/d4-styles.css' , __FILE__ ) );
	wp_enqueue_style( 'd4' );
	wp_register_script( 'd4', plugins_url( 'js/d4-scripts.js' , __FILE__ ), array( 'jquery' ), 'v20131005', true );
	wp_enqueue_script('d4');	
}

// Register and enqueue back-end plugin style sheets and scripts.
add_action('admin_enqueue_scripts', 'd4_admin_elements');
add_action('login_enqueue_scripts', 'd4_admin_elements');	
function d4_admin_elements() {
    wp_register_style('d4-admin-theme', plugins_url('css/d4-admin-styles.css', __FILE__) );
    wp_enqueue_style('d4-admin-theme' );
    wp_register_script( 'd4-admin-script', plugins_url( 'js/d4-admin-scripts.js' , __FILE__ ), array( 'jquery' ), 'v20131005', true );
	wp_enqueue_script('d4-admin-script');
}

//Plugin includes
include ('config.php');
include ('lib/functions.php');
#include ('lib/shortcodes.php');
#include ('lib/posttypes.php');
#include ('lib/roles.php');
>>>>>>> parent of 4678aba... Added versioning variables

?>