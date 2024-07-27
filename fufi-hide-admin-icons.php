<?php
/**
 * Main plugin file
 *
 * Plugin Name: Hide Admin Icons
 * Plugin URI: http://wordpress.org/plugins/hide-admin-icons/
 * Description: Hides the icons in the admin menu and page titles.
 * Version: 2.0.0
 * Author: Plugin Pizza
 * Author URI: https://plugin.pizza
 *
 * @package PluginPizza\HideAdminIcons
 */

// Enqueue stylesheet.
add_action( 'admin_enqueue_scripts', 'fufi_hai_admin_enqueue_scripts' );

/**
 * Enqueue stylesheet.
 *
 * @return void
 */
function fufi_hai_admin_enqueue_scripts() {

	wp_enqueue_style(
		'fufi_hide_admin_icons',
		plugins_url( 'fufi-hide-admin-icons.css', __FILE__ ),
		array(),
		'2.0.0'
	);
}
