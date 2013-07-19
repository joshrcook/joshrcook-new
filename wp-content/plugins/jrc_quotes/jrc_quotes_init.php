<?php

/*
Plugin Name: JRC Quotes Plugin
Plugin URI: 
Description: Plugin that allows you to add quotes to your site.
Version: 1.0
Author: Joshua Cook
Author URI: joshrcook.com
License: GPL2
*/

require_once('Easy-Wordpress-Custom-Post-Types/jw_custom_posts.php');

$jrc_quotes = new JW_Post_Type('jrc_quote', array(
		'singular_name' => 'Quote',
		'label' => 'Quotes',
		'supports' => array('title'),
		'publicly_queryable' => false,
		'query_var' => true,
		'has_archive' => false
));

$jrc_quotes->add_meta_box('Quote', array(
	'Quote' => 'textarea',
	'Quote Author' => 'text'
));