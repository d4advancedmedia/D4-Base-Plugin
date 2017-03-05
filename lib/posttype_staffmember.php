<?php
// Register Custom Post Type
function register_d4staffmember_post_type() {

	$labels = array(
		'name'                  => _x( 'Staff Members', 'Post Type General Name', 'd4-base-plugin' ),
		'singular_name'         => _x( 'Staff Member', 'Post Type Singular Name', 'd4-base-plugin' ),
		'menu_name'             => __( 'Staff Members', 'd4-base-plugin' ),
		'name_admin_bar'        => __( 'Post Type', 'd4-base-plugin' ),
		'archives'              => __( 'Staff Member Archives', 'd4-base-plugin' ),
		'attributes'            => __( 'Staff Member Attributes', 'd4-base-plugin' ),
		'parent_item_colon'     => __( 'Parent Staff Member:', 'd4-base-plugin' ),
		'all_items'             => __( 'All Staff Members', 'd4-base-plugin' ),
		'add_new_item'          => __( 'Add New Staff Member', 'd4-base-plugin' ),
		'add_new'               => __( 'Add New', 'd4-base-plugin' ),
		'new_item'              => __( 'New Staff Member', 'd4-base-plugin' ),
		'edit_item'             => __( 'Edit Staff Member', 'd4-base-plugin' ),
		'update_item'           => __( 'Update Staff Member', 'd4-base-plugin' ),
		'view_item'             => __( 'View Staff Member', 'd4-base-plugin' ),
		'view_items'            => __( 'View Staff Members', 'd4-base-plugin' ),
		'search_items'          => __( 'Search Staff Member', 'd4-base-plugin' ),
		'not_found'             => __( 'Not found', 'd4-base-plugin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'd4-base-plugin' ),
		'featured_image'        => __( 'Featured Image', 'd4-base-plugin' ),
		'set_featured_image'    => __( 'Set featured image', 'd4-base-plugin' ),
		'remove_featured_image' => __( 'Remove featured image', 'd4-base-plugin' ),
		'use_featured_image'    => __( 'Use as featured image', 'd4-base-plugin' ),
		'insert_into_item'      => __( 'Insert into item', 'd4-base-plugin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'd4-base-plugin' ),
		'items_list'            => __( 'Staff Members list', 'd4-base-plugin' ),
		'items_list_navigation' => __( 'Staff Members list navigation', 'd4-base-plugin' ),
		'filter_items_list'     => __( 'Filter items list', 'd4-base-plugin' ),
	);
	$rewrite = array(
		'slug'                  => 'staff',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Staff Member', 'd4-base-plugin' ),
		'description'           => __( 'Staff Members', 'd4-base-plugin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( '' ),
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
		'capability_type'       => 'page',
		'menu_icon'				=> 'dashicons-groups'
	);
	register_post_type( 'd4staffmember', $args );

}
add_action( 'init', 'register_d4staffmember_post_type', 0 );

// Register Custom Taxonomy
function register_d4staffmember_categories() {

	$labels = array(
		'name'                       => _x( 'Staff Member Categories', 'Taxonomy General Name', 'd4-base-plugin' ),
		'singular_name'              => _x( 'Staff Member Category', 'Taxonomy Singular Name', 'd4-base-plugin' ),
		'menu_name'                  => __( 'Staff Member Categories', 'd4-base-plugin' ),
		'all_items'                  => __( 'All Staff Member Categories', 'd4-base-plugin' ),
		'parent_item'                => __( 'Parent Staff Member Category', 'd4-base-plugin' ),
		'parent_item_colon'          => __( 'Parent Staff Member Category:', 'd4-base-plugin' ),
		'new_item_name'              => __( 'Staff Member Category Name', 'd4-base-plugin' ),
		'add_new_item'               => __( 'Add New Staff Member Category', 'd4-base-plugin' ),
		'edit_item'                  => __( 'Edit Staff Member Category', 'd4-base-plugin' ),
		'update_item'                => __( 'Update Staff Member Category', 'd4-base-plugin' ),
		'view_item'                  => __( 'View Staff Member Category', 'd4-base-plugin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'd4-base-plugin' ),
		'add_or_remove_items'        => __( 'Add or Remove Staff Member Categories', 'd4-base-plugin' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'd4-base-plugin' ),
		'popular_items'              => __( 'Popular Staff Member Categories', 'd4-base-plugin' ),
		'search_items'               => __( 'Search Staff Member Categories', 'd4-base-plugin' ),
		'not_found'                  => __( 'Not Found', 'd4-base-plugin' ),
		'no_terms'                   => __( 'No items', 'd4-base-plugin' ),
		'items_list'                 => __( 'Staff Member Categories list', 'd4-base-plugin' ),
		'items_list_navigation'      => __( 'Staff Member Categories list navigation', 'd4-base-plugin' ),
	);
	$rewrite = array(
		'slug'                       => 'staff-categories',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'd4staffmember_category', array( 'd4staffmember' ), $args );

}
add_action( 'init', 'register_d4staffmember_categories', 0 );

// Register Custom Taxonomy
function register_d4staffmember_tags() {

	$labels = array(
		'name'                       => _x( 'Staff Member Tags', 'Taxonomy General Name', 'd4-base-plugin' ),
		'singular_name'              => _x( 'Staff Member Tag', 'Taxonomy Singular Name', 'd4-base-plugin' ),
		'menu_name'                  => __( 'Staff Member Tags', 'd4-base-plugin' ),
		'all_items'                  => __( 'All Staff Member Tags', 'd4-base-plugin' ),
		'parent_item'                => __( 'Parent Staff Member Tag', 'd4-base-plugin' ),
		'parent_item_colon'          => __( 'Parent Staff Member Tag:', 'd4-base-plugin' ),
		'new_item_name'              => __( 'Staff Member Tag Name', 'd4-base-plugin' ),
		'add_new_item'               => __( 'Add New Staff Member Tag', 'd4-base-plugin' ),
		'edit_item'                  => __( 'Edit Staff Member Tag', 'd4-base-plugin' ),
		'update_item'                => __( 'Update Staff Member Tag', 'd4-base-plugin' ),
		'view_item'                  => __( 'View Staff Member Tag', 'd4-base-plugin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'd4-base-plugin' ),
		'add_or_remove_items'        => __( 'Add or Remove Staff Member Tags', 'd4-base-plugin' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'd4-base-plugin' ),
		'popular_items'              => __( 'Popular Staff Member Tags', 'd4-base-plugin' ),
		'search_items'               => __( 'Search Staff Member Tags', 'd4-base-plugin' ),
		'not_found'                  => __( 'Not Found', 'd4-base-plugin' ),
		'no_terms'                   => __( 'No items', 'd4-base-plugin' ),
		'items_list'                 => __( 'Staff Member Tags list', 'd4-base-plugin' ),
		'items_list_navigation'      => __( 'Staff Member Tags list navigation', 'd4-base-plugin' ),
	);
	$rewrite = array(
		'slug'                       => 'staff-tags',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'd4staffmember_tag', array( 'd4staffmember' ), $args );

}
add_action( 'init', 'register_d4staffmember_tags', 0 );
?>