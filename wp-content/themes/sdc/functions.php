<?php
/**
 * Enqueues scripts and styles.
 */
function sdc_scripts() {
    // Theme stylesheet.
    if(is_page(10)) {
        wp_enqueue_style( 'sdc-styles-bootstrap', get_stylesheet_directory_uri() .  '/assets/css/bootstrap.min.css' );
    }

    wp_enqueue_style( 'sdc-styles', get_stylesheet_uri() );

    wp_enqueue_script( 'sdc-scripts-bootstrap', get_stylesheet_directory_uri() .  '/assets/js/bootstrap.min.js' , array( 'jquery' ), '2' );

    wp_enqueue_script( 'sdc-scripts', get_stylesheet_directory_uri() .  '/assets/js/script.js' , array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'sdc_scripts' );

/**
 * ACF Options Page.
 */

if ( function_exists( 'acf_add_options_page' ) ) {
    $parent = acf_add_options_page( array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'redirect'   => 'Theme Settings',
        'menu_slug'  => 'options',
    ) );

    acf_add_options_sub_page( array(
        'page_title' => 'Global Options',
        'menu_title' => __('Global Options', 'html5blank'),
        'menu_slug'  => 'global-options',
        'parent'     => $parent['menu_slug']
    ) );
}

/**
 * Navigation menu.
 */
function register_menus() {
    register_nav_menu('header-main-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menus' );


/**
 * Register sidebars
 */
register_sidebars( 2, array(
    'name' => 'Foobar %d',
    'before_widget' => '<div class="hundred-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
) );

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Careers', 'Post Type General Name', 'sdc' ),
        'singular_name'       => _x( 'Career', 'Post Type Singular Name', 'sdc' ),
        'menu_name'           => __( 'Careers', 'sdc' ),
        'parent_item_colon'   => __( 'Parent Career', 'sdc' ),
        'all_items'           => __( 'All Careers', 'sdc' ),
        'view_item'           => __( 'View Career', 'sdc' ),
        'add_new_item'        => __( 'Add New Career', 'sdc' ),
        'add_new'             => __( 'Add New', 'sdc' ),
        'edit_item'           => __( 'Edit Career', 'sdc' ),
        'update_item'         => __( 'Update Career', 'sdc' ),
        'search_items'        => __( 'Search Career', 'sdc' ),
        'not_found'           => __( 'Not Found', 'sdc' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'sdc' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'careers', 'sdc' ),
        'description'         => __( 'careers news and reviews', 'sdc' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'careers', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
