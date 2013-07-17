<?php

/*
Plugin Name: JRC Portfolio plugin
Plugin URI: 
Description: Plugin that enables you to show your portfolio on your site.
Version: 1.0
Author: Joshua Cook
Author URI: joshrcook.com
License: GPL2
*/

require_once('Easy-Wordpress-Custom-Post-Types/jw_custom_posts.php');
require_once('jrc_por_functions.php');
require_once('jrc_por_taxonomies.php');
require_once('jrc_por_meta_box.php');
require_once('jrc_por_save_meta.php');

$jrc_por = new JW_Post_Type('jrc_por', array(
		'singular_name' => 'Portfolio Item',
		'label' => 'Portfolio Items',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'rewrite' => array(
			'slug' => 'work',
			'with_front' => true
			)
	));

$jrc_por->add_taxonomy('portfolio_tags', 'Portfolio Tag', array(
		'label' => 'Portfolio Tags'
	));

$jrc_por->add_meta_box('Work Link', array(
	'Link' => 'text'
	));

$jrc_por->add_meta_box('subtitle', array(
	'Subtitle' => 'text'
	));

$jrc_por->add_meta_box('Project Details', array(
	'Project Date' => 'text'
	));

// settings
define('FEATURED_IMAGE_WIDTH', 900);
define('FEATURED_IMAGE_HEIGHT', 900);


