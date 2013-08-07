<?php

add_theme_support( 'post-thumbnails' );

function add_scripts_styles()
{
	// enqueue the top bar handler on internal pages 
    if(!is_front_page()) {
    	wp_register_script('top-bar-size-handler', get_template_directory_uri() . '/js/top-bar-size.js', array('jquery'));
    	wp_enqueue_script('top-bar-size-handler');
    }
    
    wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr.development.js', array('jquery'));
    wp_enqueue_script('modernizr');
    wp_register_style('open-sans-google-font', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('open-sans-google-font');
    wp_register_style('source-sans-pro-google-font', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic');
    wp_enqueue_style('source-sans-pro-google-font');

    wp_register_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');

    // enqueue foundation 4 base
    wp_register_script('foundation-4', get_template_directory_uri() . '/vendor/foundation-4.2.2.custom.orbit/js/foundation.min.js', array('jquery'));
    wp_enqueue_script('foundation-4');
    
    // enqueue foundation 4 styles
    wp_register_style('foundation-4-orbit-css', get_template_directory_uri() . '/vendor/foundation-4.2.2.custom.orbit/css/foundation.min.css');
    wp_enqueue_style('foundation-4-orbit-css');

    // enqueue the main stylesheet
    wp_register_style('main-stylesheet', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main-stylesheet');

    if(is_front_page()) {
    	wp_register_script('parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), false, true);
    	wp_enqueue_script('parallax');
    }

    wp_register_script('jrc_theme_mixItUp', get_template_directory_uri() . '/js/vendor/mixitup-1.5.4/jquery.mixitup.min.js', array('jquery'));

    wp_register_script('show-hide', get_template_directory_uri() . '/js/show-hide.js', array('jquery'));
    wp_enqueue_script('show-hide'); 
}

add_action('wp_enqueue_scripts', 'add_scripts_styles');

function jrc_theme_load_admin_scripts_styles() {
	wp_enqueue_script('jquery');
}

add_action('admin_enqueue_scripts', 'jrc_theme_load_admin_scripts_styles');

// remove the grunion styles for contact forms
function remove_grunion_style() {
wp_dequeue_style('grunion.css');
wp_deregister_style('grunion.css');
}
add_action('wp_print_styles', 'remove_grunion_style');

function jrc_theme_submit_button_text($str) {
	return 'Submit';
}

add_filter('contact_form_submitbutton', 'jrc_theme_submit_button_text'); 

/**
*	Control the excerpt length
*/
function jrc_excerpt_length($length){
	return 100;
}

add_action('excerpt_length', 'jrc_excerpt_length', 999);


function jrc_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer Left',
		'id' => 'footer-left',
		'before_widget' => '<div class="columns large-4">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="footer-title">',
		'after_title' => '</h1>'
		));

	register_sidebar(array(
		'id' => 'blog-sidebar',
		'name' => __('Blog Sidebar', 'bonestheme'),
		'description' => __('The sidebar used on blog pages.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}

add_action('widgets_init', 'jrc_widgets_init');

/**
 * Function to get the menu items from a menu, given a slug
 * 
 * @param string $menu_slug The menu slug
 * @return array Manu items
 */
function get_nav_menu_items($menu_slug) {
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ $menu_slug ] );
    return wp_get_nav_menu_items( $menu->term_id );
}

function print_nav_menu($post_id) {
	$menu_items = get_nav_menu_items('main-nav');
    // echo '<pre>' . print_r($menu_items, 1) . '</pre>';
    foreach($menu_items as $menu_item) {
        echo '<li';
        if(isset($post_id) && $post_id == $menu_item->object_id) {
            echo ' class="selected no-js"';
        }
            echo '><a class="button secondary" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
    }
}

function get_default_categories($post_id, $seperator = ',') {
	$categories = get_the_category($post_id);
	$output = '';
	if($categories) {
		for($i = 0; $i < count($categories); $i++) {
			// 
			$output .= '<a href="' . get_category_link($categories[$i]->term_id) . '">' . $categories[$i]->name . '</a>';

			if($i != (count($categories) - 1)) {
				$output .= $seperator . "&nbsp;";
			}
		}
	}
	return $output;
}

// register the primary menu
register_nav_menu('primary', 'Primary Menu');

/**
 *	Callback for the comments template
 */
function jrc_post_comments($comment, $args, $depth) {
	$_GLOBALS['comment'] = $comment; ?>
	<div class="row single-comment">
		<li <?php comment_class(); ?>>
			<div class="columns large-2 small-2">
				<div class="avatar"><?php echo get_avatar($comment, '100'); ?></div>
			</div>
			<div class="columns large-10 small-10">
				<div class="row">
					<div class="columns">
						<?php if ($comment->comment_approved == '0') : ?>
							<div class="alert alert-info">
								<p><?php _e('Your comment is awaiting moderation.', 'bonestheme') ?></p>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="columns large-6 small-6">
						<h2 class="comment-name"><?php comment_author(); ?></h2>
						<time datetime="<?php echo comment_date('Y-m-d'); ?>"><?php if(!function_exists('how_long_ago')){comment_date() . ' at ' . comment_time(); } else { echo how_long_ago(get_comment_time('U')); } ?></time>
					</div>
					<div class="columns large-6 small-6 text-right">
						<div class="reply">
							<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="columns">
						<?php comment_text(); ?>
					</div>
				</div>
			</div>
		</li> 
	</div>
	<?php 
}

/**
 *	Function to help with relative dates in comments
 */
if(!function_exists('how_long_ago')){
    function how_long_ago($timestamp){
        $difference = time() - $timestamp;

        if($difference >= 60*60*24*365){        // if more than a year ago
            $int = intval($difference / (60*60*24*365));
            $s = ($int > 1) ? 's' : '';
            $r = $int . ' year' . $s . ' ago';
        } elseif($difference >= 60*60*24*7*5){  // if more than five weeks ago
            $int = intval($difference / (60*60*24*30));
            $s = ($int > 1) ? 's' : '';
            $r = $int . ' month' . $s . ' ago';
        } elseif($difference >= 60*60*24*7){        // if more than a week ago
            $int = intval($difference / (60*60*24*7));
            $s = ($int > 1) ? 's' : '';
            $r = $int . ' week' . $s . ' ago';
        } elseif($difference >= 60*60*24){      // if more than a day ago
            $int = intval($difference / (60*60*24));
            $s = ($int > 1) ? 's' : '';
            $r = $int . ' day' . $s . ' ago';
        } elseif($difference >= 60*60){         // if more than an hour ago
            $int = intval($difference / (60*60));
            $s = ($int > 1) ? 's' : '';
            $r = $int . ' hour' . $s . ' ago';
        } elseif($difference >= 60){            // if more than a minute ago
            $int = intval($difference / (60));
            $s = ($int > 1) ? 's' : '';
            $r = $int . ' minute' . $s . ' ago';
        } else {                                // if less than a minute ago
            $r = 'moments ago';
        }

        return $r;
    }
}


/************ INCLUDE THE FOUNDATION CORE ************/
require_once( get_template_directory() . '/foundation-functions.php');
