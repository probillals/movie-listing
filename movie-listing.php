<?php

/*
Plugin Name: Movie Listing
Description: Step by Step listing movie
Version: 1.0.0
Author: Billal Hossain
*/


// No one directly access our plugin
//Exit if Accessed Directly
 
if (!defined('ABSPATH')){
	exit;
	}


// Load Script
require_once(plugin_dir_path(__FILE__) . '/includes/movie-listing-scripts.php');



	require_once(plugin_dir_path(__FILE__) . '/includes/movie-listing-cpt.php');
	require_once(plugin_dir_path(__FILE__) . '/includes/movie-listing-settings.php');
	require_once(plugin_dir_path(__FILE__) . '/includes/movie-listing-fields.php');
	require_once(plugin_dir_path(__FILE__) . '/includes/movie-listing-reorder.php');

require_once(plugin_dir_path(__FILE__) . '/includes/movie-listing-shortcode.php');


