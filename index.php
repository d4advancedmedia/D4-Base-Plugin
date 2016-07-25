<?php
/*
	Plugin Name: d4
	Plugin URI: https://github.com/d4advancedmedia/
	GitHub Theme URI: https://github.com/d4advancedmedia/
	GitHub Branch: master
	Description: D4 Base Plugin
	Version:
	Author: D4 Adv. Media
	License: GPL2
*/

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

?>