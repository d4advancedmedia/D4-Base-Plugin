<?php
/*
	Plugin Name: D4 Base Plugin
	Plugin URI: https://github.com/d4advancedmedia/
	GitHub Theme URI: https://github.com/d4advancedmedia/
	GitHub Branch: master
	Description: Styles and functionality added by D4
	Version: 3Mar17
	Author: D4 Adv. Media
	License: GPL2
*/

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


?>