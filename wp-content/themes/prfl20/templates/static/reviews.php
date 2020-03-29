<div class="wrap">
<h1 class="wp-heading-inline">Reviews</h1> 



<br /> <br />

<hr class="wp-header-end">

<?php
global $wpdb;
$projects = $wpdb->get_results("SELECT * FROM wp_reviews");
?>

<table class="wp-list-table widefat fixed striped pages">
<thead>
<td><center>Name</center></td>
<td> <center>Review </center></td>
<td> <center>Relation</center></td>
<td> <center>Time </center></td>
<td><center> Id </center></td>
</thead>

<?php foreach($projects as $project){ ?>

<tr>
 <td><center><?php echo $project->name; ?></center></td>
 <td><center><?php echo $project->text; ?></center></td>
 <td><center><?php echo $project->rel; ?></center></td>
 <td><center><?php echo $project->time; ?></center></td>
 <td><center><?php echo $project->id; ?></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=edit_review&id='.$project->id; ?>" >Edit</a></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=edit_review&action=delete&id='.$project->id; ?>">Delete</a></center></td>



</tr>

<?php } ?>

</div>