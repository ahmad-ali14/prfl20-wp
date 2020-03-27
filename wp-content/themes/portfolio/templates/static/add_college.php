<?php ?>
<div class="wrap">
<?php
ob_start();

if (isset($_GET['id']) && $_GET['action']=='delete') {
    $id = $_GET['id'];
    global $wpdb;
    $wpdb->delete( "wp_education", array( 'id' => $id ) );
    die('deleted');

}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo ' <h1 class="wp-heading-inline"> Edit College/University </h1>';
    } else {
        echo ' <h1 class="wp-heading-inline"> Add New College/University </h1>';
    }  
    global $wpdb;
    $pr = $wpdb->get_results("SELECT * FROM wp_education WHERE id = $id LIMIT 1");
  
    $start = $pr[0]->start;
    $end = $pr[0]->end;
    $degree = $pr[0]->degree;
    $university = $pr[0]->university;
    $country = $pr[0]->country;
    $id = $pr[0]->id;
 





?>

<br /> <br />

    <form action="" method="post">

        <label for="pr-university">college / university Name:
            <input type="text" name="pr-university" value="<?php echo $university  ?>" size="50">
        </label> <br /> <br />

        <label for="pr-start">Start Year:
            <input type="text" name="pr-start" value="<?php echo $start ?>" size="50">
        </label> <br /> <br />

        <label for="pr-end">Graduation year:
            <input type="text" name="pr-end" value="<?php echo $end ?>" size="50">
        </label> <br /> <br />

        <label for="pr-degree"> Degree/ certificate Name:
            <input type="text" name="pr-degree" value="<?php echo $degree ?>" size="50">
        </label> <br /> <br />

        <label for="pr-country">Country:
            <input type="text" name="pr-country" value="<?php echo $country ?>" size="50">
        </label> <br /> <br />


         <input type="hidden" name="id" value="<?php echo $id ?>" size="50">

        <?php //} ?>


        <br /> <br />
        <?php 

        if (isset($_GET['id'])) {
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="edit" value="Edit college / university" />';
   
        }else{
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="add" value="Add college / university" />';
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




    global $wpdb, $university, $country, $degree, $start, $end;


    $university = (!empty($_POST['pr-university'])) ? sanitize_text_field($_POST['pr-university']) : '';
    $degree = (!empty($_POST['pr-degree'])) ? sanitize_text_field($_POST['pr-degree']) : '';
    $country = (!empty($_POST['pr-country'])) ? sanitize_text_field($_POST['pr-country']) : '';
    $start = (!empty($_POST['pr-start'])) ? sanitize_text_field($_POST['pr-start']) : '';
    $end = (!empty($_POST['pr-end'])) ? sanitize_text_field($_POST['pr-end']) : '';
   



    $table_name = $wpdb->prefix . "education";

    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'university' => $university,
            'degree' => $degree,
            'country' => $country,
            'start' => $start,
            'end' => $end
            
        )
    );
}


if (isset($_POST['edit'])) {
    
    print_r($_POST);

    // if (
    //     empty($_POST["name"]) || empty($_POST["pr-lang"]) || empty($_POST["pr-url"])
    //     || empty($_POST["pr-github"]) || empty($_POST["pr-video"]) || empty($_POST["pr-sum"])
    // ) {
       
    //     show_message('* pleas fill all fields, all are required.');
    //     exit;
    // }



// Get form values.

global $wpdb, $university, $country, $degree, $start, $end;


$university = (!empty($_POST['pr-university'])) ? sanitize_text_field($_POST['pr-university']) : '';
$degree = (!empty($_POST['pr-degree'])) ? sanitize_text_field($_POST['pr-degree']) : '';
$country = (!empty($_POST['pr-country'])) ? sanitize_text_field($_POST['pr-country']) : '';
$start = (!empty($_POST['pr-start'])) ? sanitize_text_field($_POST['pr-start']) : '';
$end = (!empty($_POST['pr-end'])) ? sanitize_text_field($_POST['pr-end']) : '';




$table_name = $wpdb->prefix . "education";



$wpdb->update( $table_name, 
array( 

    'time' => current_time('mysql'),
    'university' => $university,
    'degree' => $degree,
    'country' => $country,
    'start' => $start,
    'end' => $end
    
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


