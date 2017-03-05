<?php
/*
	This is the base include file for custom scripts, functions, and styling. The /custom directory will not be updated by the github updater, so feel free to add as much or as little as you want. Be sure to uncomment the include line in the index file if you do.
*/

// Fetch the baseplugin version from the plugin index file
global $d4baseplugin_version;

// Register and enqueue font-end plugin style sheets and scripts.
add_action( 'wp_enqueue_scripts', 'register_d4_elements' );
function register_d4_elements() {
	wp_register_style( 'd4', plugins_url( 'css/d4-styles.css' , __FILE__ ), '', $d4baseplugin_version );
	wp_enqueue_style( 'd4' );
	wp_register_script( 'd4', plugins_url( 'js/d4-scripts.js' , __FILE__ ), array( "jquery", "jquery-ui-core", "jquery-ui-accordion" ), $d4baseplugin_version, true );
	wp_enqueue_script('d4');
}

// Register and enqueue back-end plugin style sheets and scripts.
add_action('admin_enqueue_scripts', 'd4_admin_elements');
add_action('login_enqueue_scripts', 'd4_admin_elements');	
function d4_admin_elements() {
    wp_register_style('d4-admin-theme', plugins_url('css/d4-admin-styles.css', __FILE__), '', $d4baseplugin_version );
    wp_enqueue_style('d4-admin-theme' );
    wp_register_script( 'd4-admin-script', plugins_url( 'js/d4-admin-scripts.js' , __FILE__ ), array( 'jquery' ), $d4baseplugin_version, true );
	wp_enqueue_script('d4-admin-script');
}

//Plugin includes
include ('config.php');
include ('lib/custom_shortcodes.php');
include ('lib/custom_functions.php');
?>