<?php


if (isset($_POST['add'])) {

    print_r($_POST);
    print_r('add');

    // if (
    //     empty($_POST["name"]) || empty($_POST["pr-lang"]) || empty($_POST["pr-url"])
    //     || empty($_POST["pr-github"]) || empty($_POST["pr-video"]) || empty($_POST["pr-sum"])
    // ) {
    //     // $_SESSION['form_err'] = "* pleas fill all fields, all are required";
    //     // $_POST['finished'] = 'not';
    //     // echo '<pre>';
    //     // print_r($_POST);
    //     // print_r($_SESSION);
    //     // echo '</pre>';
    //     //return false;
    //     // header("Location:" .home_url().'/wp-admin/admin.php?page=home-page-options?finish=not');
    //     show_message('* pleas fill all fields, all are required.');
    //     exit();
    // }




    global $wpdb, $name, $lang, $url, $github, $video, $sum;

   // print_r($name, $lang, $url, $github, $video, $sum);
    // Get form values.
    $name = (!empty($_POST['pr-name'])) ? sanitize_text_field($_POST['pr-name']) : '';
    $lang = (!empty($_POST['pr-lang'])) ? sanitize_text_field($_POST['pr-lang']) : '';
    $url = (!empty($_POST['pr-url'])) ? sanitize_text_field($_POST['pr-url']) : '';
    $github = (!empty($_POST['pr-github'])) ? sanitize_text_field($_POST['pr-github']) : '';
    $video = (!empty($_POST['pr-video'])) ? sanitize_text_field($_POST['pr-video']) : '';
    $sum = (!empty($_POST['pr-sum'])) ? sanitize_text_field($_POST['pr-sum']) : '';



    $table_name = $wpdb->prefix . "projects";

    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'name' => $name,
            'languages' => $lang,
            'url' => $url,
            'github' => $github,
            'video' => $video,
            'summary' => $sum
        )
    );
}


if (isset($_POST['edit'])) {
    //print_r($_POST);
   // print_r('edit');
    global $wpdb, $name, $lang, $url, $github, $video, $sum;

    // if (
    //     empty($_POST["name"]) || empty($_POST["pr-lang"]) || empty($_POST["pr-url"])
    //     || empty($_POST["pr-github"]) || empty($_POST["pr-video"]) || empty($_POST["pr-sum"])
    // ) {
       
    //     show_message('* pleas fill all fields, all are required.');
    //     exit();
    // }



// Get form values.
$name = (!empty($_POST['pr-name'])) ? sanitize_text_field($_POST['pr-name']) : '';
$lang = (!empty($_POST['pr-lang'])) ? sanitize_text_field($_POST['pr-lang']) : '';
$url = (!empty($_POST['pr-url'])) ? sanitize_text_field($_POST['pr-url']) : '';
$github = (!empty($_POST['pr-github'])) ? sanitize_text_field($_POST['pr-github']) : '';
$video = (!empty($_POST['pr-video'])) ? sanitize_text_field($_POST['pr-video']) : '';
$sum = (!empty($_POST['pr-sum'])) ? sanitize_text_field($_POST['pr-sum']) : '';



$table_name = $wpdb->prefix . "projects";



$wpdb->update( $table_name, 
array( 

    'time' => current_time('mysql'),
    'name' => $name,
    'languages' => $lang,
    'url' => $url,
    'github' => $github,
    'video' => $video,
    'summary' => $sum

),
array('ID'=>$id), array("%s"), array("%d"));



}




?>