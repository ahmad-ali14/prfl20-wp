<?php

function add_admin_options (){
    add_menu_page('Bio', 'Bio', 'manage_options', 'bio', 'theme_init', 'dashicons-id', 6);
    // add_submenu_page('theme-options-settings', 'gray banner options', 'gray banner', 'manage_options', 'gray-banner-options', 'banner_init' );
    add_submenu_page('bio', 'bio', 'bio', 'manage_options', 'bio', 'theme_init' );

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
    //2- register setteing
    //register_setting( 'home-page-options-group', 'blackBox');
    register_setting( 'home-page-options-group', 'yourName');
    register_setting( 'home-page-options-group', 'yourRole');
    register_setting( 'home-page-options-group', 'yourBio');
    register_setting( 'home-page-options-group', 'yourLocation');
    register_setting( 'home-page-options-group', 'yourLinkedin');
    register_setting( 'home-page-options-group', 'yourTwitter');
    register_setting( 'home-page-options-group', 'yourFacebook');
    register_setting( 'home-page-options-group', 'yourGithub');
    register_setting( 'home-page-options-group', 'yourImage');




    add_settings_section('bio-options', 'Bio Information', 'homePage_options', 'theme-options-settings' );


    //1-add field
   // add_settings_field('blackBox-text', 'Text below slider', 'blackBox_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('your-name', 'Your Name:', 'yourName_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourRole', 'Your Role:', 'yourRole_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourBio', 'Your Bio:', 'yourBio_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourLocation', 'Your Location:', 'yourLocation_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourTwitter', 'Twitter:', 'yourTwitter_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourFacebook', 'Facebook:', 'yourFacebook_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourLinkedin', 'LinkedIn:', 'yourLinkedin_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourGithub', 'Github:', 'yourGithub_callback', 'theme-options-settings', 'bio-options'  );
    add_settings_field('yourImage', 'Image URL:', 'yourImage_callback', 'theme-options-settings', 'bio-options'  );
}

function homePage_options(){
    echo 'Change Data for The Bio Section';
}

// function blackBox_callback (){
//    $preText =  esc_attr( get_option('blackBox'));
//     echo ' <input type="text" name="blackBox" placeholder="Gray Banner Text" size="50" value="'.$preText. '" > ';
   

// }

function yourName_callback (){
    $preText =  esc_attr( get_option('yourName'));
     echo ' <input type="text" name="yourName" placeholder="your name" size="50" value="'.$preText. '" > ';
 }

 function yourRole_callback (){
    $preText =  esc_attr( get_option('yourRole'));
     echo ' <input type="text" name="yourRole" placeholder="your Role" size="50" value="'.$preText. '" > ';
 }

 function yourBio_callback (){
    $preText =  esc_attr( get_option('yourBio'));
     echo ' <textarea type="text" name="yourBio" placeholder="your Bio" cols="50" rows="5" value="'.$preText. '" >'.$preText. '</textarea '; 
 }

 function yourLocation_callback (){
    $preText =  esc_attr( get_option('yourLocation'));
     echo ' <input type="text" name="yourLocation" placeholder="your Location" size="50" value="'.$preText. '" > ';
 }

 function yourLinkedin_callback (){
    $preText =  esc_attr( get_option('yourLinkedin'));
     echo ' <input type="text" name="yourLinkedin" placeholder="your Linkedin" size="50" value="'.$preText. '" > ';
 }

 function yourFacebook_callback (){
    $preText =  esc_attr( get_option('yourFacebook'));
     echo ' <input type="text" name="yourFacebook" placeholder="your Facebook" size="50" value="'.$preText. '" > ';
 }

 function yourTwitter_callback (){
    $preText =  esc_attr( get_option('yourTwitter'));
     echo ' <input type="text" name="yourTwitter" placeholder="your Twitter" size="50" value="'.$preText. '" > ';
 }

 function yourGithub_callback (){
    $preText =  esc_attr( get_option('yourGithub'));
     echo ' <input type="text" name="yourGithub" placeholder="your Github" size="50" value="'.$preText. '" > ';
 }

 function yourImage_callback (){
    $preText =  esc_attr( get_option('yourImage'));
     echo ' <input type="text" name="yourImage" placeholder="your Image URL" size="50" value="'.$preText. '" > <p> use external or internal image url , preferred (350 * 450 px) </p>'   ;
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