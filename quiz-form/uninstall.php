<?php 
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	header('location:/form_plugin');
    die;
}
 global $wpdb, $table_prefix;
$wp_emp = $table_prefix.'formplugin';
 $queR="DROP TABLE `$wp_emp`";
  $wpdb->query($queR);




 ?>