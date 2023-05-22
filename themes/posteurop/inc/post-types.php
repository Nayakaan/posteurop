<?php

/**
 * Custom post types tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _s
 */


/**
 * Register custom Post Type
 */

function posteurop_post_types()
{
	// Our Members Post Type
	register_post_type('our-members', array(
		'label'                 => __('Our Members', 'text_domain'),
		'description'           => __('This creates a our members post.', 'text_domain'),
		'supports'              => array('title'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
		'menu_icon' 			=> 'dashicons-portfolio',
		'labels'                => array(
			'name'                  => _x('Our Members', 'Post Type General Name', 'text_domain'),
			'singular_name'         => _x('Our Members', 'Post Type Singular Name', 'text_domain'),
			'menu_name'             => __('Our Members', 'text_domain'),
			'name_admin_bar'        => __('Our Members', 'text_domain'),
			'archives'              => __('Archived Our Members', 'text_domain'),
			'attributes'            => __('Our Members Attributes', 'text_domain'),
			'parent_item_colon'     => __('Parent Item:', 'text_domain'),
			'all_items'             => __('All Our Members', 'text_domain'),
			'add_new_item'          => __('Add New Our Members', 'text_domain'),
			'add_new'               => __('Add New', 'text_domain'),
			'new_item'              => __('New Our Members', 'text_domain'),
			'edit_item'             => __('Edit Our Members', 'text_domain'),
			'update_item'           => __('Update Our Members', 'text_domain'),
			'view_item'             => __('View Our Members', 'text_domain'),
			'view_items'            => __('View Our Members', 'text_domain'),
			'search_items'          => __('Search Our Members', 'text_domain'),
			'not_found'             => __('Not found', 'text_domain'),
			'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
			'featured_image'        => __('Featured Image', 'text_domain'),
			'set_featured_image'    => __('Set featured image', 'text_domain'),
			'remove_featured_image' => __('Remove featured image', 'text_domain'),
			'use_featured_image'    => __('Use as featured image', 'text_domain'),
			'insert_into_item'      => __('Insert Into Our Members', 'text_domain'),
			'uploaded_to_this_item' => __('Uploaded To This Our Members', 'text_domain'),
			'items_list'            => __('Our Members List', 'text_domain'),
			'items_list_navigation' => __('Our Members List Navigation', 'text_domain'),
			'filter_items_list'     => __('Filter Our Members List', 'text_domain'),
		),
	));
}

add_action('init', 'posteurop_post_types');

//create a custom taxonomy
function the_posteurop_taxonomies()
{

	$labels = array(
		'name' => _x('Types', 'taxonomy general name'),
		'singular_name' => _x('Type', 'taxonomy singular name'),
		'search_items' =>  __('Search Types'),
		'all_items' => __('All Types'),
		'parent_item' => __('Parent Type'),
		'parent_item_colon' => __('Parent Type:'),
		'edit_item' => __('Edit Type'),
		'update_item' => __('Update Type'),
		'add_new_item' => __('Add New Type'),
		'new_item_name' => __('New Type Name'),
		'menu_name' => __('Types'),
	);

	register_taxonomy('types', array('our-members'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'type'),
	));
}

add_action('init', 'the_posteurop_taxonomies', 0);
