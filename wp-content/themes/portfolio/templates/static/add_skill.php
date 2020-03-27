<?php ?>
<div class="wrap">
<?php
ob_start();

if (isset($_GET['id']) && $_GET['action']=='delete') {
    $id = $_GET['id'];
    global $wpdb;
    $wpdb->delete( "wp_skills", array( 'id' => $id ) );
    die('deleted');

}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo ' <h1 class="wp-heading-inline"> Edit Skill </h1>';
    } else {
        echo ' <h1 class="wp-heading-inline"> Add New Skill </h1>';
    }  
    global $wpdb;
    $pr = $wpdb->get_results("SELECT * FROM wp_skills WHERE id = $id LIMIT 1");
  
    $skill = $pr[0]->skill;
    $value = $pr[0]->value;
    $fontAwesome = $pr[0]->fontAwesome;
    $id = $pr[0]->id;
 





?>

<br /> <br />

    <form action="" method="post">

        <label for="pr-skill">Skill:
            <input type="text" name="pr-skill" value="<?php echo $skill  ?>" size="50">
        </label> <br /> <br />

        <label for="pr-value">value (0 - 100):
            <input type="number" name="pr-value" value="<?php echo $value ?>" size="50">
        </label> <br /> <br />

        <label for="pr-fontAwesome">Font Awesome Class:
            <input type="text" name="pr-fontAwesome" value="<?php echo $fontAwesome ?>" size="50">
        </label> <br /> <br />

      


         <input type="hidden" name="id" value="<?php echo $id ?>" size="50">

        <?php //} ?>


        <br /> <br />
        <?php 

        if (isset($_GET['id'])) {
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="edit" value="Edit Skill" />';
   
        }else{
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="add" value="Add Skill" />';
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




    global $wpdb, $skill, $value, $fontAwesome;


    $skill = (!empty($_POST['pr-skill'])) ? sanitize_text_field($_POST['pr-skill']) : '';
    //$value = (!empty($_POST['pr-value'])) ? sanitize_text_field($_POST['pr-value']) : '';
    $value = ( ! empty( $_POST['pr-value'] ) ) ? intval( absint( $_POST['pr-value'] ) ) : '';
    $fontAwesome = (!empty($_POST['pr-fontAwesome'])) ? sanitize_text_field($_POST['pr-fontAwesome']) : '';
  



    $table_name = $wpdb->prefix . "skills";

    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'skill' => $skill,
            'value' => $value,
            'fontAwesome' => $fontAwesome
           
            
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
global $wpdb, $skill, $value, $fontAwesome;


$skill = (!empty($_POST['pr-skill'])) ? sanitize_text_field($_POST['pr-skill']) : '';
$value = ( ! empty( $_POST['pr-value'] ) ) ? intval( absint( $_POST['pr-value'] ) ) : '';
//$value = (!empty($_POST['pr-value'])) ? sanitize_text_field($_POST['pr-value']) : '';
$fontAwesome = (!empty($_POST['pr-fontAwesome'])) ? sanitize_text_field($_POST['pr-fontAwesome']) : '';




$table_name = $wpdb->prefix . "skills";



$wpdb->update( $table_name, 
array( 

    'time' => current_time('mysql'),
    'skill' => $skill,
    'value' => $value,
    'fontAwesome' => $fontAwesome
    
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


