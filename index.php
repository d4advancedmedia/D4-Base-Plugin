<?php
/*
	Plugin Name: Knickers
	Plugin URI: https://github.com/d4advancedmedia/
	GitHub Theme URI: https://github.com/d4advancedmedia/
	GitHub Branch: master
	Description: An almost naked plugin
	Version:
	Author: D4 Adv. Media
	License: GPL2

	Notes: Run a find and replace for 'knickers' - replace with your unique plugin function identifier, preferably starting with 'd4' to make sure that it is unique (used for handles, functions, etc). You will also want to rename the javascript files to match their registration urls below.
*/

// Register and enqueue font-end plugin style sheets and scripts.
add_action( 'wp_enqueue_scripts', 'register_knickers_elements' );
function register_knickers_elements() {
	wp_register_style( 'knickers', plugins_url( '../css/knickers.css' , __FILE__ ) );
	wp_enqueue_style( 'knickers' );
	wp_register_script( 'knickers', plugins_url( '../js/knickers.js' , __FILE__ ), array( 'jquery' ), 'v20131005', true );
	wp_enqueue_script('knickers');	
}

// Register and enqueue back-end plugin style sheets and scripts.
add_action('admin_enqueue_scripts', 'knickers_admin_elements');
add_action('login_enqueue_scripts', 'knickers_admin_elements');	
function knickers_admin_elements() {
    wp_register_style('knickers-admin-theme', plugins_url('../css/knickers-admin.css', __FILE__) );
    wp_enqueue_style('knickers-admin-theme' );
    wp_register_script( 'knickers-admin-script', plugins_url( '../js/knickers-admin.js' , __FILE__ ), array( 'jquery' ), 'v20131005', true );
	wp_enqueue_script('knickers-admin-script');
}

//Plugin includes
#include ('lib/config.php');
#include ('lib/functions.php');
#include ('lib/shortcodes.php');
#include ('lib/posttypes.php');
#include ('lib/roles.php');

?>