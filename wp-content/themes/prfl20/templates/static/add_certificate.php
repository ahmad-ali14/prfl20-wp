<?php ?>
<div class="wrap">
<?php
ob_start();

if (isset($_GET['id']) && $_GET['action']=='delete') {
    $id = $_GET['id'];
    global $wpdb;
    $wpdb->delete( "wp_certificates", array( 'id' => $id ) );
    die('deleted');

}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo ' <h1 class="wp-heading-inline"> Edit Certificate </h1>';
    } else {
        echo ' <h1 class="wp-heading-inline"> Add New Certificate </h1>';
    }  
    global $wpdb;
    $pr = $wpdb->get_results("SELECT * FROM wp_certificates WHERE id = $id LIMIT 1");
  
    $name = $pr[0]->name;
    $provider = $pr[0]->provider;
    $url = $pr[0]->url;
    $host = $pr[0]->host;
    $photo = $pr[0]->photo;
    $id = $pr[0]->id;
 





?>

<br /> <br />

    <form action="" method="post">

        <label for="pr-name">Certificate Name:
            <input type="text" name="pr-name" value="<?php echo $name  ?>" size="50">
        </label> <br /> <br />

        <label for="pr-provider">course provider:
            <input type="text" name="pr-provider" value="<?php echo $provider ?>" size="50">
        </label> <br /> <br />

        <label for="pr-url">course URL:
            <input type="text" name="pr-url" value="<?php echo $url ?>" size="50">
        </label> <br /> <br />

        <label for="pr-host"> Host Platform:
            <input type="text" name="pr-host" value="<?php echo $host ?>" size="50">
        </label> <br /> <br />

        <label for="pr-photo">Photo URL:
            <input type="text" name="pr-photo" value="<?php echo $photo ?>" size="50">
        </label> <br /> <br />


         <input type="hidden" name="id" value="<?php echo $id ?>" size="50">

        <?php //} ?>


        <br /> <br />
        <?php 

        if (isset($_GET['id'])) {
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="edit" value="Edit Certificate" />';
   
        }else{
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="add" value="Add Certificate" />';
        }

        ?>
    </form>

  
   
</div>

<?php


if (isset($_POST['add'])) {

   print_r($_POST);

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




    global $wpdb, $name, $host, $url, $photo, $provider;


    $name = (!empty($_POST['pr-name'])) ? sanitize_text_field($_POST['pr-name']) : '';
    $host = (!empty($_POST['pr-host'])) ? sanitize_text_field($_POST['pr-host']) : '';
    $url = (!empty($_POST['pr-url'])) ? sanitize_text_field($_POST['pr-url']) : '';
    $provider = (!empty($_POST['pr-provider'])) ? sanitize_text_field($_POST['pr-provider']) : '';
    $photo = (!empty($_POST['pr-photo'])) ? sanitize_text_field($_POST['pr-photo']) : '';
   



    $table_name = $wpdb->prefix . "certificates";

    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'name' => $name,
            'host' => $host,
            'url' => $url,
            'provider' => $provider,
            'photo' => $photo
            
        )
    );
}


if (isset($_POST['edit'])) {
    
    print_r($_POST);

     global $wpdb, $name, $host, $url, $photo, $provider;

    // if (
    //     empty($_POST["name"]) || empty($_POST["pr-lang"]) || empty($_POST["pr-url"])
    //     || empty($_POST["pr-github"]) || empty($_POST["pr-video"]) || empty($_POST["pr-sum"])
    // ) {
       
    //     show_message('* pleas fill all fields, all are required.');
    //     exit;
    // }



// Get form values.
    $name = (!empty($_POST['pr-name'])) ? sanitize_text_field($_POST['pr-name']) : '';
    $host = (!empty($_POST['pr-host'])) ? sanitize_text_field($_POST['pr-host']) : '';
    $url = (!empty($_POST['pr-url'])) ? sanitize_text_field($_POST['pr-url']) : '';
    $provider = (!empty($_POST['pr-provider'])) ? sanitize_text_field($_POST['pr-provider']) : '';
    $photo = (!empty($_POST['pr-photo'])) ? sanitize_text_field($_POST['pr-photo']) : '';


$table_name = $wpdb->prefix . "certificates";



$wpdb->update( $table_name, 
array( 

            'time' => current_time('mysql'),
            'name' => $name,
            'host' => $host,
            'url' => $url,
            'provider' => $provider,
            'photo' => $photo,

),
array('ID'=>$id), array("%s"), array("%d"));

//$urll =home_url().'/wp-admin/admin.php?page=home-page-options&id='.$_POST['id'];

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


