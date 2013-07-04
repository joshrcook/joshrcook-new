<?php

function add_scripts_styles()
{
    wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr.development.js', array('jquery'));
    wp_enqueue_script('modernizr');
    wp_register_style('open-sans-google-font', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('open-sans-google-font');
    wp_register_style('source-sans-pro-google-font', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic');
    wp_enqueue_style('source-sans-pro-google-font');
    wp_register_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
    wp_enqueue_style('font-awesome');

    // enqueue foundation 4 base
    wp_register_script('foundation-4', get_template_directory_uri() . '/vendor/foundation-4.2.2.custom.orbit/js/foundation/foundation.js', array('jquery'));
    wp_enqueue_script('foundation-4');
    // enqueue foundation 4 orbit
    wp_register_script('foundation-4-orbit', get_template_directory_uri() . '/vendor/foundation-4.2.2.custom.orbit/js/foundation/foundation.orbit.js', array('jquery', 'foundation-4'));
     wp_enqueue_script('foundation-4-orbit');
    // enqueue foundation 4 styles
    wp_register_style('foundation-4-orbit-css', get_template_directory_uri() . '/vendor/foundation-4.2.2.custom.orbit/css/foundation.min.css');
    wp_enqueue_style('foundation-4-orbit-css');

    if(is_front_page()) {
    	wp_register_script('parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), false, true);
    	wp_enqueue_script('parallax');
    }
}

add_action('wp_enqueue_scripts', 'add_scripts_styles');

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

/************ INCLUDE THE FOUNDATION CORE ************/
require_once( get_template_directory() . '/foundation-functions.php');

/************ INITIALIZE THE BONES FRAMEWORK ************/
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once('library/custom-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'bonestheme'),
		'description' => __('The first (primary) sidebar.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'bonestheme'),
		'description' => __('The second (secondary) sidebar.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>', 'bonestheme'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'bonestheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'bonestheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'bonestheme') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search the Site...','bonestheme').'" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
	</form>';
	return $form;
} // don't remove this bracket!


?>
