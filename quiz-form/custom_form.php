<?php 
// Plugin Name: Quiz form
// Description: This is a test plugin.The shortcode for the plugin is 'customizeform'.

// version:1.1
// Author:Shilpa Sharma
include( plugin_dir_path( __FILE__ ) . 'functions.php');

if (!defined('ABSPATH')) {
	header('location:/form_plugin');
die();
}

// to remove temporary data such as cache and temp files and directories.
function my_plugin_deactivation(){
	 global $wpdb, $table_prefix;
$wp_emp = $table_prefix.'shilpanewup';
 $que="TRUNCATE `$wp_emp`";
  $wpdb->query($que);
}
 register_deactivation_hook(
	__FILE__,'my_plugin_deactivation');
