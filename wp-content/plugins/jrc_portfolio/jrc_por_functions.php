<?php

// add image sizes for portfolio images
add_image_size('Portfolio-Small', 300, 300, false);
add_image_size('Portfolio-Medium', 600, 600, false);
add_image_size('Portfolio-Large', 700, 99999999, false);

// add featured image instructions
function jrc_por_add_featured_image_instructions($html)
{
    $html .= '<p class="description">Please include an image that is '.FEATURED_IMAGE_WIDTH.'x'.FEATURED_IMAGE_HEIGHT.'px</p>';
    return $html;
}

add_filter('admin_post_thumbnail_html', 'jrc_por_add_featured_image_instructions', 10, 2);


function add_admin_scripts_styles()
{
    global $typenow;

    if($typenow == 'jrc_por') {
        // bootstrap scoped to '.bootstrap'
        wp_register_style('jrc_por_bootstrap', plugins_url() . '/jrc_portfolio/css/vendor/bootstrap/bootstrap.base.scoped.min.css');
        wp_enqueue_style('jrc_por_bootstrap');
        // jquery ui css
        wp_register_style('jrc_por_jquery_ui_theme', plugins_url() . '/jrc_portfolio/vendor/jquery-ui-1.10.3.custom/css/jquery-ui-1.10.3.custom.min.css');
        wp_enqueue_style('jrc_por_jquery_ui_theme');
        // jquery ui sortable, scoped to '.bootstrap'
        wp_register_script('jrc_por_jquery_ui_sortable', plugins_url() . '/jrc_portfolio/vendor/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js', array('jquery'), false, true);
        wp_enqueue_script('jrc_por_jquery_ui_sortable');
        // sortable init on '.media-items'
        wp_register_script('jrc_por_sortable_init', plugins_url() . '/jrc_portfolio/js/sortable.js', array('jquery', 'jrc_por_jquery_ui_sortable'), false, true);
        wp_enqueue_script('jrc_por_sortable_init');
        // get media init
        wp_register_script('jrc_por_get_media_slider', plugins_url() . '/jrc_portfolio/js/get-media-slider.js', array('jquery'), false, true);
        wp_enqueue_script('jrc_por_get_media_slider');
        // get background media init
        wp_register_script('jrc_por_get_media_bg', plugins_url() . '/jrc_portfolio/js/get-media-background.js', array('jquery'), false, true);
        wp_enqueue_script('jrc_por_get_media_bg');
        // get media css
        wp_register_style('jrc_por_admin_css', plugins_url() . '/jrc_portfolio/css/admin.css');
        wp_enqueue_style('jrc_por_admin_css');
    }
}

add_action('admin_enqueue_scripts', 'add_admin_scripts_styles');


// set the contants for the reorder plugin
define( 'REORDER_DIR', plugin_dir_path(__FILE__) . '/inc/metronet-reorder-posts/' ); // Plugin folder DIR
define( 'REORDER_URL', plugin_dir_url(__FILE__) .  '/inc/metronet-reorder-posts/' ); // Plugin folder URL

// require the reorder class
require_once(REORDER_DIR . 'class-reorder.php');

// instantiate a new instance of the reorder class
function jrc_por_reorder_init() {
    $post_type = 'jrc_por';

    // Instantiate new reordering
    new Reorder(
        array(
            'post_type'   => $post_type,
            'order'       => 'ASC',
            'heading'     => __( 'Reorder Portfolio Items', 'reorder' ),
            'final'       => '',
            'initial'     => '',
            'menu_label'  => __( 'Reorder', 'reorder' ),
            // 'icon'        => REORDER_URL . '/metronet-icon.png',
            'post_status' => 'publish',
        )
    );
}

add_action( 'wp_loaded', 'jrc_por_reorder_init', 100 ); //Load low priority in init for other plugins to generate their post types





