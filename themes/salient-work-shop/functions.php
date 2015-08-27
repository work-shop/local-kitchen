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
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'order-by' => 'menu_order'
	));
}
add_action('init', 'add_menu_posttype');

/**
 * rename_portfolio_post_type : void -> void
 * This method renames the portfolio post type on child-theme load
 *
 * @hooked init
 */
function rename_portfolio_post_type() {
	global $wp_post_types;
	$p = "portfolio";

	if ( empty( $wp_post_types[ $p ] ) || ! is_object( $wp_post_types[ $p ] ) || empty( $wp_post_types[ $p ]->labels ) ) { return; }

	$wp_post_types[ $p ]->labels->name = "Press";
	$wp_post_types[ $p ]->labels->singular_name = "Press";
	$wp_post_types[ $p ]->labels->add_new = "Add Press Item";
	$wp_post_types[ $p ]->labels->add_new_item = "Add New Press Item";
	$wp_post_types[ $p ]->labels->all_items = "All Press";
	$wp_post_types[ $p ]->labels->edit_item = "Edit Press";
	$wp_post_types[ $p ]->labels->name_admin_bar = "Press";
	$wp_post_types[ $p ]->labels->menu_name = "Press";
	$wp_post_types[ $p ]->labels->new_item = "New Press Item";
	$wp_post_types[ $p ]->labels->not_found = "New Press Items found";
	$wp_post_types[ $p ]->labels->not_found_in_trash = "New Press Items found in Trash";
	$wp_post_types[ $p ]->labels->search_items = "Search Press";
	$wp_post_types[ $p ]->labels->view_item = "View Press Item";

}
add_action('wp_loaded', 'rename_portfolio_post_type');

?>