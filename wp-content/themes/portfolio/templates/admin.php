<?php

function add_admin_options (){
    add_menu_page('Theme_Options', 'Theme Settings', 'manage_options', 'theme-options-settings', 'theme_init', 'dashicons-admin-post', 6);
    // add_submenu_page('theme-options-settings', 'gray banner options', 'gray banner', 'manage_options', 'gray-banner-options', 'banner_init' );
    add_submenu_page('theme-options-settings', 'home-page-options', 'home-page-options', 'manage_options', 'theme-options-settings', 'theme_init' );

    add_menu_page('projects', 'projects', 'manage_options', 'projects', 'projects', 'dashicons-editor-code', 6);
    
    add_submenu_page('projects', 'Add new project', 'Add new project', 'manage_options', 'add-new-project', 'add_new_project');

    add_menu_page('certificates', 'certificates', 'manage_options', 'certificates', 'certificates', 'dashicons-welcome-learn-more', 6);

    add_submenu_page('certificates', 'Add new certificate', 'Add new certificate', 'manage_options', 'add-new-certificate', 'add_new_certificate');

    add_menu_page('education', 'education', 'manage_options', 'education', 'education', 'dashicons-book
    ', 6);

    add_submenu_page('education', 'Add new college', 'Add new college', 'manage_options', 'add-new-college', 'add_new_college');

    add_menu_page('skills', 'skills', 'manage_options', 'skills', 'skills', 'dashicons-hammer', 6);

    add_submenu_page('skills', 'Add new skill', 'Add new skill', 'manage_options', 'add-new-skill', 'add_new_skill');


}

add_action('admin_menu', 'add_admin_options');
add_action('admin_init', 'theme_settings');

function theme_settings (){
    register_setting( 'home-page-options-group', 'blackBox');
    add_settings_section('theme-index-options', 'Home Page Settings', 'homePage_options', 'theme-options-settings' );
    add_settings_field('blackBox-text', 'Text below slider', 'blackBox_callback', 'theme-options-settings', 'theme-index-options'  );
}

function homePage_options(){
    echo 'Customize Home Page';
}

function blackBox_callback (){
   $preText =  esc_attr( get_option('blackBox'));
    echo ' <input type="text" name="blackBox" placeholder="Gray Banner Text" size="50" value="'.$preText. '" > ';
   

}


function theme_init(){
    require_once( get_template_directory().'/templates/static/admin.php');
} 
    

// function homePage_init (){
//     echo '<h1>HomePage INIT</h1>';
// }

// function banner_init (){
//     require_once( get_template_directory().'/templates/static/gray_banner.php');

// }

function projects (){
    require_once( get_template_directory().'/templates/static/projects.php');

}

function add_new_project (){
    require_once( get_template_directory().'/templates/static/add_project.php');

}

function certificates (){
    require_once( get_template_directory().'/templates/static/certificates.php');

}

function add_new_certificate (){
    require_once( get_template_directory().'/templates/static/add_certificate.php');

}

function education (){
    require_once( get_template_directory().'/templates/static/education.php');

}

function add_new_college (){
    require_once( get_template_directory().'/templates/static/add_college.php');

}

function skills (){
    require_once( get_template_directory().'/templates/static/skills.php');

}

function add_new_skill (){
    require_once( get_template_directory().'/templates/static/add_skill.php');

}






?>