<?php 

require_once( get_template_directory().'/templates/admin.php');

function wpa_90820() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() .'/style.css', array() );
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array() );
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() .'/vendor/fontawesome-free/css/all.min.css', array() );
    wp_enqueue_style('style','https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i', array() );
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() .'/css/sb-admin-2.min.css', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/jquery/jquery.min.js', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/bootstrap/js/bootstrap.bundle.min.js', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/vendor/jquery-easing/jquery.easing.min.js', array() );
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/js/sb-admin-2.min.js', array() );
    wp_enqueue_script('fontAwesome', " https://kit.fontawesome.com/1c03bf9151.js", array() );


   
      
}

add_action('wp_enqueue_scripts', 'wpa_90820');

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );




function calling_menus() {
    add_theme_support('menus');
    register_nav_menu('primary', 'very Top of your page');

}

add_action('init', 'calling_menus');


function show_msgs_to_admin() {
    include_once(ABSPATH."wp-admin/includes/plugin.php");
    if( !is_plugin_active('easing-slider/easing-slider.php') ) {
        echo '<div id="allert"  class="error">';
        echo '<p>This theme requires you to install <a href="https://wordpress.org/plugins/easing-slider/"> easing-slider</a> plug-in</p>';
        echo '</div>';
    }
}



add_action('admin_notices', "show_msgs_to_admin");





?>