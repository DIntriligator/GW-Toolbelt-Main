<?php
/*
Plugin Name: GW Toolbelt Main
GitHub Plugin URI: DIntriligator/GW-Toolbelt-MainGitHub Plugin URI: https://github.com/DIntriligator/GW-Toolbelt-Main
Description: A Group of plugins aimed at making the development of wordpress plugins easier. This main plugin will serve as a hub for all of the others
Author: Graphics Westchester
Version: 0.0.00
*/


function graphw_toolbox_menu() {
add_menu_page( 'GW Toolbelt', 'GW Toolbelt', 'manage_options', 'graphicswestchestertoolbox', 'graphw_toolbox_options',plugin_dir_url(dirname(__FILE__)) . 'images/graphw-logo.png');
}