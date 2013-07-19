<?php

/*
Plugin Name: JRC Staff Plugin
Plugin URI: 
Description: Plugin that allows you to show staff members in a web page, including their picture, title, and information
Version: 1.0
Author: Joshua Cook
Author URI: joshrcook.com
License: GPL2
*/

require_once('Easy-Wordpress-Custom-Post-Types/jw_custom_posts.php'); 

$jrc_staff = new JW_Post_Type('jrc_staff', array(
	'singular_name' => 'Staff',
	'label' => 'Staff Members',
	'supports' => array('title', 'thumbnail'),
	'publicly_queryable' => false,
	'query_var' => true,
	'has_archive' => false
));

$jrc_staff->add_meta_box('Staff Member Details', array(
	'Name' => 'text', 
	'Title' => 'text', 
	'About Me' => 'text'
));
