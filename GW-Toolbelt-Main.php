<?php
/*
Plugin Name: GW Toolbelt Main
GitHub Plugin URI: DIntriligator/GW-Toolbelt-MainGitHub Plugin URI: https://github.com/DIntriligator/GW-Toolbelt-Main
Description: A Group of plugins aimed at making the development of wordpress plugins easier. This main plugin will serve as a hub for all of the others
Author: Graphics Westchester
Version: 0.0.00
*/

//define plugin directory constant
define( 'PLUGIN_DIR', dirname(__FILE__).'/' );  

/*
*  gwtb_admin_menu
*
*  This function adds a menu that will allow addon plugins to create their own submenus
*
*  @type    function
*  @date    11/09/16
*  @since   0.0.00
*
*  @param   N/A
*  @return  N/A
*/

function gwtb_admin_menu() {
	add_menu_page( 'GW Toolbelt', 'GW Toolbelt', 'manage_options', 'gwtoolbelt', '', plugin_dir_url(__FILE__) . 'images/graphw-logo.png');
}
add_action( 'admin_menu', 'gwtb_admin_menu' );

/*
*  gwtb_admin_settings_menu
*
*  This function adds a settings section to view  
*
*  @type    function
*  @date    11/09/16
*  @since   0.0.00
*
*  @param   N/A
*  @return  N/A
*/

function gwtb_admin_status_menu(){
	add_submenu_page( 'gwtoolbelt', 'Status', 'Status', 'manage_options', 'gwtb-status', 'gwtb_status_init' )
}
add_action( 'admin_menu', 'gwtb_admin_menu' );
