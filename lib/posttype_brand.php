<?php
// Register Custom Post Type
function register_d4brands_post_type() {

	$labels = array(
		'name'                  => _x( 'Brands', 'Post Type General Name', 'd4-base-plugin' ),
		'singular_name'         => _x( 'Brand', 'Post Type Singular Name', 'd4-base-plugin' ),
		'menu_name'             => __( 'Brands', 'd4-base-plugin' ),
		'name_admin_bar'        => __( 'Brand', 'd4-base-plugin' ),
		'archives'              => __( 'Brand Archives', 'd4-base-plugin' ),
		'attributes'            => __( 'Brand Attributes', 'd4-base-plugin' ),
		'parent_item_colon'     => __( 'Parent Brand:', 'd4-base-plugin' ),
		'all_items'             => __( 'All Brands', 'd4-base-plugin' ),
		'add_new_item'          => __( 'Add New Brand', 'd4-base-plugin' ),
		'add_new'               => __( 'Add New', 'd4-base-plugin' ),
		'new_item'              => __( 'New Brand', 'd4-base-plugin' ),
		'edit_item'             => __( 'Edit Brand', 'd4-base-plugin' ),
		'update_item'           => __( 'Update Brand', 'd4-base-plugin' ),
		'view_item'             => __( 'View Brand', 'd4-base-plugin' ),
		'view_items'            => __( 'View Brands', 'd4-base-plugin' ),
		'search_items'          => __( 'Search Brand', 'd4-base-plugin' ),
		'not_found'             => __( 'Not found', 'd4-base-plugin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'd4-base-plugin' ),
		'featured_image'        => __( 'Featured Image', 'd4-base-plugin' ),
		'set_featured_image'    => __( 'Set featured image', 'd4-base-plugin' ),
		'remove_featured_image' => __( 'Remove featured image', 'd4-base-plugin' ),
		'use_featured_image'    => __( 'Use as featured image', 'd4-base-plugin' ),
		'insert_into_item'      => __( 'Insert into item', 'd4-base-plugin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'd4-base-plugin' ),
		'items_list'            => __( 'Items list', 'd4-base-plugin' ),
		'items_list_navigation' => __( 'Items list navigation', 'd4-base-plugin' ),
		'filter_items_list'     => __( 'Filter items list', 'd4-base-plugin' ),
	);
	$rewrite = array(
		'slug'                  => 'brands',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Brand', 'd4-base-plugin' ),
		'description'           => __( 'Brand Pages', 'd4-base-plugin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => '',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'menu_icon'				=> 'dashicons-store',
	);
	register_post_type( 'd4brands', $args );

}
add_action( 'init', 'register_d4brands_post_type', 0 );