<?php
/*
 * Plugin Name: Tubaret Network Share Plugin for Wordpress
 * Plugin URI: http://www.tubaret.com
 * Description: Embed any Tubaret Network sharing button in your blog (Tubaret.com, Gameret.com, Indieret.com)
 * Version: 1.03
 * Author: Tubaret Network
 * Author URI: http://www.tubaret.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright (c) 2014 Tubaret Network
This file is part of the Tubaret Network Share plugin for Wordpress.

Copyright (C) yyyy  name of author

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

 */

$path['tbr_wp_plugin']  =   plugin_dir_path(__FILE__);
$path['tbr_wp_plugin_url']  =   plugin_dir_url(__FILE__);
$path['tbr_wp_inc']     =   $path['tbr_wp_plugin']."/inc/";
$path['tbr_wp_tpl']     =   $path['tbr_wp_plugin']."/tpl/";

function tbr_wp_install () {
	add_option('tbr_wp_site', 'tubaret', '', 'yes');
	add_option('tbr_wp_size', 'large', '', 'yes');
	add_option('tbr_wp_position_vert', 'top', '', 'yes');
	add_option('tbr_wp_position_horiz', 'right', '', 'yes');
}
/* Drop database fields */
function tbr_wp_remove () {
	delete_option('tbr_wp_site');
	delete_option('tbr_wp_size');
	delete_option('tbr_wp_position_vert');
	delete_option('tbr_wp_position_horiz');
}

/* Runs when plugin is activated */
register_activation_hook(__FILE__, 'tbr_wp_install'); 
/* Runs on plugin deactivation*/
register_deactivation_hook(__FILE__, 'tbr_wp_remove');
/* Register database fields */

if (is_admin()) {
	require_once($path['tbr_wp_inc'].'tbr_wp_admin.php');
	add_action('admin_menu', 'tubaret_network_admin_menu');
} else {
	require_once($path['tbr_wp_inc'].'tbr_wp.php');
	add_filter( 'the_content', 'tbr_wp_add_button_filter', 20 );
	add_action('wp_head', 'tbr_wp_add_css_to_head');
}