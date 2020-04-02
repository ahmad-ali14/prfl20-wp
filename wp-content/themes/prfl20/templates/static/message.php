<?php ?>
<div class="wrap">
<?php
ob_start();

if(!isset($id)){
    die('No Id, choose message to view first!');
    exit;
}

if (isset($_GET['id']) && $_GET['action']=='delete') {
    $id = $_GET['id'];
    global $wpdb;
    $table_name = $wpdb->prefix . "messages";
    $wpdb->delete( $table_name, array( 'id' => $id ) );
    die('deleted');
    exit;

}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
 
  echo ' <h1 class="wp-heading-inline"> View Message </h1>';
    } 
    global $wpdb;
    $table_name = $wpdb->prefix . "messages";

    $doc = $wpdb->get_results("SELECT * FROM $table_name WHERE id = $id LIMIT 1");
  
    $email = $doc[0]->email;
    $message = $doc[0]->message;
    $name = $doc[0]->name;
    $time = $doc[0]->time;
    $id = $doc[0]->id;
 

?>

<br /> <br />

<table class="wp-list-table widefat fixed striped pages">
<thead>
<td><center>Email : <?php echo $email; ?></center></td>
<td> <center> Name:  <?php echo $name; ?> </center></td>
<td> <center> Time :  <?php echo $time; ?></center></td>
<td><center> Id :  <?php echo $id; ?> </center></td>
</thead>

<tr >
<td> <center>Message: </center> </td>    
<td colspan="3"> 
<?php echo $message; ?>
</td>
</tr>
<tr >
<td colspan="2"><center><div class="wrap"><a class="page-title-action" href="<?php  echo home_url().'/wp-admin/admin.php?page=messages'; ?>" >back</a></div></center></td>
 <td colspan="2"><center><div class="wrap"><a class="page-title-action" href="<?php  echo home_url().'/wp-admin/admin.php?page=message&action=delete&id='.$doc->id; ?>">Delete</a></div></center></td>
</tr>
</div>