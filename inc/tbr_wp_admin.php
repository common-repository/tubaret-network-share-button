<?php
/*
The main admin page for this plugin. The logic for different user input and form submittion is written here. 
*/
function tubaret_network_admin_menu () {
	$plugin_page = add_options_page('Tubaret Network Settings', 'Tubaret Network', 'administrator',
		'tubaret-network-share-button', 'tubaret_network_admin_page');
	//add_action( "admin_print_scripts-$plugin_page", 'tubaret_network_admin_head' );
}

function tubaret_network_admin_head () {

}

function tubaret_network_admin_page () {
	if (! current_user_can('manage_options'))  {
		wp_die(__('You do not have sufficient permissions to access this page.'));
	}
	if (isset($_POST['tbr_wp_submit']) && $_POST['tbr_wp_submit'] === "true") {

		update_option('tbr_wp_site', $_POST['tbr_wp_site']);
		update_option('tbr_wp_size', $_POST['tbr_wp_size']);
		update_option('tbr_wp_position_vert', $_POST['tbr_wp_position_vert']);
		update_option('tbr_wp_position_horiz', $_POST['tbr_wp_position_horiz']);

		$template['update'] = true;
	}else{
		$template['update'] = false;		
	}

	$template['options']['site'] = get_option('tbr_wp_site', 'tubaret');
	$template['options']['size'] = get_option('tbr_wp_size', 'large');
	$template['options']['position_vert'] = get_option('tbr_wp_position_vert', 'top');
	$template['options']['position_horiz'] = get_option('tbr_wp_position_horiz', 'right');

	include($GLOBALS['path']['tbr_wp_tpl']."admin_page.tpl.php");

}