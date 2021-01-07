<?php
/**
 
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add svg support */
//require_once( 'library/svg-support.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'	=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Page 1',
		'menu_title'	=> 'Page 1',
		'parent_slug'	=> 'options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Page 2',
		'menu_title'	=> 'Page 2',
		'parent_slug'	=> 'options',
	));

}
//function create_posttype() {
//
//	register_post_type( 'goods',
//		// CPT Options
//		array(
//			'labels' => array(
//				'name' => __( 'Goods' ),
//				'singular_name' => __( 'Goods' )
//			),
//			'public' => true,
//			'has_archive' => true,
//			'rewrite' => array('slug' => 'goods'),
//			'show_in_rest' => true,
//
//		)
//	);
//}
//// Hooking up our function to theme setup
//add_action( 'init', 'create_posttype' );

function Goods() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Goods', 'Post Type General Name', 'CDM' ),
		'singular_name'       => _x( 'Goods', 'Post Type Singular Name', 'CDM' ),
		'menu_name'           => __( 'Goods', 'CDM' ),
		'all_items'           => __( 'All goods', 'CDM' ),
		'view_item'           => __( 'View product', 'CDM' ),
		'add_new_item'        => __( 'Add new product', 'CDM' ),
		'add_new'             => __( 'Add new', 'CDM' ),
		'edit_item'           => __( 'Edit product', 'CDM' ),
		'update_item'         => __( 'Update product list', 'CDM' ),
		'search_items'        => __( 'Search products', 'CDM' ),
		'not_found'           => __( 'Not found', 'CDM' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'CDM' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'products', 'CDM' ),
		'description'         => __( 'Products news and reviews', 'CDM' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'categories' ,'taxonomies'),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'category','topics' ),
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
	register_post_type( 'Goods', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'Goods', 0 );

function Services() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Service', 'Post Type General Name', 'CDM' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'CDM' ),
		'menu_name'           => __( 'Service', 'CDM' ),
		'all_items'           => __( 'All Services', 'CDM' ),
		'view_item'           => __( 'View Services', 'CDM' ),
		'add_new_item'        => __( 'Add new Services', 'CDM' ),
		'add_new'             => __( 'Add new', 'CDM' ),
		'edit_item'           => __( 'Edit Services', 'CDM' ),
		'update_item'         => __( 'Update Services list', 'CDM' ),
		'search_items'        => __( 'Search Services', 'CDM' ),
		'not_found'           => __( 'Not found', 'CDM' ),
		'not_found_in_trash'  => __( 'Not found in trash', 'CDM' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'services', 'CDM' ),
		'description'         => __( 'services news and reviews', 'CDM' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'categories' ,'taxonomies' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'category','topics' ),
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
	register_post_type( 'Service', $args );


}
add_action( 'init', 'Services', 0 );

function my_theme_send_email() {

  if ( isset( $_POST['email-submission'] ) && '1' == $_POST['email-submission'] ) {

    // Send the email...
		echo "success";

  } // end if

} // end my_theme_send_email

add_action( 'init', 'my_theme_send_email' );

function category_url(){
	global $wp;
	$url =  home_url( add_query_arg( array(), $wp->request ) );

	$siteurl = parse_url($url);
	$category = str_replace('/category/', '', $siteurl['path']);
	return $category;
}
add_action('init','category_url');




