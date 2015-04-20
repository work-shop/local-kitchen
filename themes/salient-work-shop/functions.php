<?php 
/**
 * file: functions.php
 * 
 * This file defines all custom functionality
 * for the Local Kitchen Theme.
 *
 */


/**
 * add_menu_post_type : void -> void
 * This method registers the menu posttype. 
 *
 * @hooked init
 *
 */
function add_menu_posttype() {
	register_post_type('menus', array(
		'labels' => array(
			'name' => 'Menus',
			'singular_name' => 'Menu',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Menu',
			'edit_item' => 'Edit Menus',
			'new_item' => 'New Menu',
			'all_items' => 'All Menus',
			'view_item' => 'View Menu',
			'search_item' => 'Search Menus',
			'not_found' => 'No Menus Found',
			'not_found_in_trash' => 'No Menus found in Trash',
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'menus'),
		'supports' => array('title', 'thumbnail')
	));
}
add_action('init', 'add_menu_posttype');

?>