<?php 
$hobby = ( ! empty( $_POST['user-hobby'] ) ) ? sanitize_text_field( $_POST['user-hobby'] ) : '';
$age = ( ! empty( $_POST['user-age'] ) ) ? intval( absint( $_POST['user-age'] ) ) : '';

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

global $jal_db_version;
    $jal_db_version= "1.0.0";

function jal_install (){
   global $wpdb;
  
   
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





?>