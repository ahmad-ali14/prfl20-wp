<?php ?>
<div class="wrap">
<?php
ob_start();

if(!isset($_GET['id'])){
    die('No Id, choose review to view first!');
    exit;
}

if (isset($_GET['id']) && $_GET['action']=='delete') {
    $id = $_GET['id'];
    global $wpdb;
    $table_name = $wpdb->prefix . "reviews";
    $wpdb->delete( $table_name, array( 'id' => $id ) );
    die('deleted');
    exit;

}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo ' <h1 class="wp-heading-inline"> Edit Review </h1>';
    }  
    global $wpdb;
    $table_name = $wpdb->prefix . "reviews";
    $pr = $wpdb->get_results("SELECT * FROM $table_name WHERE id = $id LIMIT 1");
    // if (!$pr) {
    //     die('No record with id: ' . $id);
    // }
    $name = $pr[0]->name;
    $text = $pr[0]->text;
    $rel = $pr[0]->rel;
    $id = $pr[0]->id;
  




?>

<br /> <br />

    <form action="<?php  //echo home_url().'/wp-content/themes/portfolio/templates/static/add-edit-pr-action.php'?>" method="post">

        <label for="name"> Name:
            <input type="text" name="name" value="<?php echo $name  ?>" size="50">
        </label> <br /> <br />

        <label for="rel">relation:
            <input type="text" name="rel" value="<?php echo $rel ?>" size="50">
        </label> <br /> <br />

     

        <label for="text">Review:
            <textarea type="text" name="text" value="<?php echo $text ?>" cols=50 rows=5> <?php echo $text ?></textarea>
        </label> <br /> <br />

         <input type="hidden" name="id" value="<?php echo $id ?>" size="50">



        <br /> <br />
        <?php 

        if (isset($_GET['id'])) {
            echo '<input style="margin-left: 10%;" class="btn btn-primary" type="submit" name="edit" value="Save Review" />';
   
        }
        ?>
    </form>

 
   
</div>

<?php




if (isset($_POST['edit'])) {
    
    
    global $wpdb;

    // if (
    //     empty($_POST["name"]) || empty($_POST["pr-lang"]) || empty($_POST["pr-url"])
    //     || empty($_POST["pr-github"]) || empty($_POST["pr-video"]) || empty($_POST["pr-sum"])
    // ) {
       
    //     show_message('* pleas fill all fields, all are required.');
    //     exit;
    // }



// Get form values.
$name = (!empty($_POST['name'])) ? sanitize_text_field($_POST['name']) : '';
$rel = (!empty($_POST['rel'])) ? sanitize_text_field($_POST['rel']) : '';
$text = (!empty($_POST['text'])) ? sanitize_text_field($_POST['text']) : '';



$table_name = $wpdb->prefix . "reviews";



$wpdb->update( $table_name, 
array( 

    'time' => current_time('mysql'),
    'name' => $name,
    'rel' => $rel,
    'text' => $text,
    

),
array('ID'=>$id), array("%s"), array("%d"));


show_message('Updated, Refresh the page');
//die('updated');
exit;
}

