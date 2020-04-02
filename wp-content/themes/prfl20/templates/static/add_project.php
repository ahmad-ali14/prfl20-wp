<?php ?>
<div class="wrap">
<?php
ob_start();

if (isset($_GET['id']) && $_GET['action']=='delete') {
    $id = $_GET['id'];
    global $wpdb;
    $table_name = $wpdb->prefix . "projects";
    $wpdb->delete( $table_name, array( 'id' => $id ) );
    die('deleted');

}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo ' <h1 class="wp-heading-inline"> Edit Project </h1>';
    } else {
        echo ' <h1 class="wp-heading-inline"> Add New Project </h1>';
    }  
    global $wpdb;
    $pr = $wpdb->get_results("SELECT * FROM wp_projects WHERE id = $id LIMIT 1");
    // if (!$pr) {
    //     die('No record with id: ' . $id);
    // }
    $name = $pr[0]->name;
    $lang = $pr[0]->languages;
    $url = $pr[0]->url;
    $git = $pr[0]->github;
    $video = $pr[0]->video;
    $summary = $pr[0]->summary;
    $date = $pr[0]->date;
    $fontAwesome = $pr[0]->fontAwesome;





?>

<br /> <br />

    <form action="<?php  //echo home_url().'/wp-content/themes/portfolio/templates/static/add-edit-pr-action.php'?>" method="post">
 <!-- <?php //foreach($project as $pr){ ?> -->

        <label for="pr-name">Project Name:
            <input type="text" name="pr-name" value="<?php echo $name  ?>" size="50">
        </label> <br /> <br />

        <label for="pr-lang">Languages used:
            <input type="text" name="pr-lang" value="<?php echo $lang ?>" size="50">
        </label> <br /> <br />

        <label for="pr-url">Project URL:
            <input type="text" name="pr-url" value="<?php echo $url ?>" size="50">
        </label> <br /> <br />

        <label for="pr-github">Github URL:
            <input type="text" name="pr-github" value="<?php echo $git ?>" size="50">
        </label> <br /> <br />

        <label for="pr-video">video URL:
            <input type="text" name="pr-video" value="<?php echo $video ?>" size="50">
        </label> <br /> <br />


        <label for="pr-awesome">Font Awesome Class:
            <input type="text" name="pr-awesome" value="<?php echo $fontAwesome ?>" size="50">
        </label> <br /> <br />

        <label for="pr-date">project date:
            <input type="text" name="pr-date" value="<?php echo $date ?>" size="50">
        </label> <br /> <br />


        <label for="pr-sum">Project Summary:
            <textarea type="text" name="pr-sum" value="<?php echo $summary ?>" cols=50 rows=5> <?php echo $summary ?></textarea>
        </label> <br /> <br />

         <input type="hidden" name="id" value="<?php echo $id ?>" size="50">

        <?php //} ?>


        <br /> <br />
        <?php 

        if (isset($_GET['id'])) {
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="edit" value="Edit project" />';
   
        }else{
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="add" value="Add project" />';
        }

        ?>
    </form>

   
    <?php

    //  if ($_SESSION['form_err']) { 
    //   echo  '<p>'. $_SESSION['form_err']. '</p>';  
    //  }

    // $fullUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    // if(strpos($fullUrl, "fininsh=not")){
    //     echo "<p class='error'> * pleas fill all fields, all are required </p>";
    // }

    // if($_POST['finished']=="not"){
    //     echo "<p class='error'> * pleas fill all fields, all are required </p>";
    // }

     
      ?>
   
</div>

<?php


if (isset($_POST['add'])) {

   print_r($_POST);
   print_r('\n add');

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




    global $wpdb, $name, $lang, $url, $github, $video, $sum, $date, $awesome;

   // print_r($name, $lang, $url, $github, $video, $sum);
    // Get form values.
    $name = (!empty($_POST['pr-name'])) ? sanitize_text_field($_POST['pr-name']) : '';
    $lang = (!empty($_POST['pr-lang'])) ? sanitize_text_field($_POST['pr-lang']) : '';
    $url = (!empty($_POST['pr-url'])) ? sanitize_text_field($_POST['pr-url']) : '';
    $github = (!empty($_POST['pr-github'])) ? sanitize_text_field($_POST['pr-github']) : '';
    $video = (!empty($_POST['pr-video'])) ? sanitize_text_field($_POST['pr-video']) : '';
    $sum = (!empty($_POST['pr-sum'])) ? sanitize_text_field($_POST['pr-sum']) : '';
    $date = (!empty($_POST['pr-date'])) ? sanitize_text_field($_POST['pr-date']) : '';
    $awesome = (!empty($_POST['pr-awesome'])) ? sanitize_text_field($_POST['pr-awesome']) : '';




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
            'summary' => $sum,
            'date' => $date,
            'fontAwesome' => $awesome
        )
    );
}


if (isset($_POST['edit'])) {
    
    print_r($_POST);
     print_r('\n edit');
    global $wpdb, $name, $lang, $url, $github, $video, $sum;

    // if (
    //     empty($_POST["name"]) || empty($_POST["pr-lang"]) || empty($_POST["pr-url"])
    //     || empty($_POST["pr-github"]) || empty($_POST["pr-video"]) || empty($_POST["pr-sum"])
    // ) {
       
    //     show_message('* pleas fill all fields, all are required.');
    //     exit;
    // }



// Get form values.
$name = (!empty($_POST['pr-name'])) ? sanitize_text_field($_POST['pr-name']) : '';
$lang = (!empty($_POST['pr-lang'])) ? sanitize_text_field($_POST['pr-lang']) : '';
$url = (!empty($_POST['pr-url'])) ? sanitize_text_field($_POST['pr-url']) : '';
$github = (!empty($_POST['pr-github'])) ? sanitize_text_field($_POST['pr-github']) : '';
$video = (!empty($_POST['pr-video'])) ? sanitize_text_field($_POST['pr-video']) : '';
$sum = (!empty($_POST['pr-sum'])) ? sanitize_text_field($_POST['pr-sum']) : '';
$date = (!empty($_POST['pr-date'])) ? sanitize_text_field($_POST['pr-date']) : '';
$awesome = (!empty($_POST['pr-awesome'])) ? sanitize_text_field($_POST['pr-awesome']) : '';


$table_name = $wpdb->prefix . "projects";



$wpdb->update( $table_name, 
array( 

    'time' => current_time('mysql'),
    'name' => $name,
    'languages' => $lang,
    'url' => $url,
    'github' => $github,
    'video' => $video,
    'summary' => $sum,
    'date' => $date,
    'fontAwesome' => $awesome

),
array('ID'=>$id), array("%s"), array("%d"));

$urll =home_url().'/wp-admin/admin.php?page=home-page-options&id='.$_POST['id'];

//redirect($urll);
//wp_safe_redirect( $urll );
show_message('Updated, Refresh the page');
//die('updated');
exit;
}


function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


