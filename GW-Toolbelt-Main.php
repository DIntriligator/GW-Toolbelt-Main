<?php
/*
Plugin Name: GW Toolbelt Main
GitHub Plugin URI: DIntriligator/GW-Toolbelt-Main
GitHub Plugin URI: https://github.com/DIntriligator/GW-Toolbelt-Main
Description: A Group of plugins aimed at making the development of wordpress plugins easier. This main plugin will serve as a hub for all of the others
Author: Graphics Westchester
Version: 0.0.00
*/

//define plugin directory constant
define( 'GWTB_PLUGIN_DIR', dirname(__FILE__).'/' );  

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
	$menu = add_menu_page( 'GW Toolbelt', 'GW Toolbelt', 'manage_options', 'gwtoolbelt', 'gwtb_admin_menu_init', plugin_dir_url(__FILE__) . 'images/graphw-logo.png');

}
add_action( 'admin_menu', 'gwtb_admin_menu' , 1);

/*
*  gwtb_admin_menu_init
*
*  This function adds a menu that will allow addon plugins to 
*
*  @type    function
*  @date    11/09/16
*  @since   0.0.00
*
*  @param   N/A
*  @return  N/A
*/
function gwtb_admin_menu_init() {
	include(GWTB_PLUGIN_DIR . 'admin-welcome.php');
}

/*
*  gwtb_admin_status_menu
*
*  This function adds a status section to view the status of addon settings.
*
*  @type    function
*  @date    11/09/16
*  @since   0.0.00
*
*  @param   N/A
*  @return  N/A
*/

function gwtb_admin_status_menu(){
	$menu = add_submenu_page( 'gwtoolbelt', 'Status', 'Status', 'manage_options', 'gwtb-status', 'gwtb_status_init' );

}
add_action( 'admin_menu', 'gwtb_admin_status_menu', 2 );

/*
*  gwtb_admin_status_menu
*
*  This function adds a page layout for the gwtb_admin_status_menu function
*
*  @type    function
*  @date    11/09/16
*  @since   0.0.00
*
*  @param   N/A
*  @return  N/A
*/

function gwtb_status_init(){
	include(GWTB_PLUGIN_DIR . 'admin-status.php');
}

/*
*  gwtb_admin_style 
*
*  This function adds a css page that only works in tool belt menu pages. add:	add_action( 'admin_print_styles-' . $menu, 'gwtb_admin_style' ); when adding a submenu.
*
*  @type    function
*  @date    11/09/16
*  @since   0.0.00
*
*  @param   N/A
*  @return  N/A
*/
function gwtb_admin_style() {
 
  wp_enqueue_style( 'custom_wp_admin_css', plugins_url('style.css', __FILE__) );
}
add_action('admin_head', 'gwtb_admin_style');


//helpers
include(GWTB_PLUGIN_DIR . 'helpers/cpt.php');

//modules
include(GWTB_PLUGIN_DIR . 'modules/shortcodes.php');
