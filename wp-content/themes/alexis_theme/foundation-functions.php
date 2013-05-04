<?php

/************ INCLUDE FOUNDATIONi 4 CORE ************/
/*
 * This file initializes the Foundation 4 framework so
 * that it can be use for wordpress,
 * including the css files and the js files.
 */

$foundation_core_dir = get_template_directory() . '/foundation-core';

// register both scripts and styles during init
function f4_register_scripts_styles() {
	// register css styles
	wp_register_style('normalize', $foundation_core_dir . '/css/normalize.css', false);
	wp_register_style('foundation-base-css', $foundation_core_dir . '/css/foundation.min.css', false);

	// register js files
	wp_register_script('f4-modernizr', $foundation_core_dir . '/js/vendor/custom.mondernizr.js', false);
	// this script inits all f4 js
	// to initialize only parts, use js from js/foundation directory
	wp_register_script('f4-js', $foundation_core_dir . '/js/foundation.min.js', array('jquery'));
}

add_action('init', 'f4_register_scripts_styles');

// init the styles in the header
function f4_enqueue_styles() {
	wp_enqueue_style('normalize');
	wp_enqueue_style('foundation-base-css');
}

add_action('wp_head', 'f4_enqueue_styles');

// init the js in the footer for faster loading times
function f4_enqueue_scripts() {
	wp_enqueue_script('f4-modernizr');
	wp_enqueue_script('f4-js');
}

add_action('wp_footer', 'f4_enqueue_scripts');
