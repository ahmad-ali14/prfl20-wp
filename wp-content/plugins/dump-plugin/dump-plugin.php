<?php 
/*
Plugin Name: Dump Plugin
Plugin URI: https://akismet.com/
Description: test plugin
Version: 4.1.3
Author: Ahmad Ali
Author URI: https://www.ahmad-ali.co.uk/
License: GPLv2 or later
Text Domain: akismet
*/

global $jal_db_version;
    $jal_db_version= "1.0.0";

function jal_install (){
   global $wpdb;
   global $jal_db_version;
   
   $table_name =$wpdb->prefix."projects";
   $charset_collate = $wpdb->get_charset_collate();

   $sql = "CREATE TABLE $table_name(
       id mediumint(9) NOT NULL AUTO_INCREMENT,
       time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
       name tinytext NOT NULL,
       text text NOT NULL,
       url varchar(55) DEFAULT '' NOT NULL,
       PRIMARY KEY (id) 
   )$charset_collate; ";

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    add_option('jal_db_version', $jal_db_version);
}


function jal_install_data(){
    global $wpdb;

    $name = "Ahmad";
    $desc = "junior web dev";

    $table_name =$wpdb->prefix."projects";

    $wpdb->insert($table_name, 
        array(
            'time' => current_time('mysql'),
            'name' => $name,
            'text' => $desc
        )
    );

}

register_activation_hook(__FILE__, 'jal_install');
register_activation_hook(__FILE__, 'jal_install_data');



?>