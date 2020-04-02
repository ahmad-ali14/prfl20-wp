<div class="wrap">
<h1 class="wp-heading-inline">Projects</h1> 

<a class="page-title-action"  href="<?php echo  home_url().'/wp-admin/admin.php?page=add-new-project'; ?>" >Add New</a>

<br /> <br />

<hr class="wp-header-end">

<?php
global $wpdb;
$table_name = $wpdb->prefix . "projects";
$projects = $wpdb->get_results("SELECT * FROM $table_name");
?>

<table class="wp-list-table widefat fixed striped pages">
<thead>
<td><center>Project</center></td>
<td> <center>Last Updated </center></td>
<td><center> Id </center></td>
</thead>

<?php foreach($projects as $project){ ?>

<tr>
 <td><center><?php echo $project->name; ?></center></td>
 <td><center><?php echo $project->time; ?></center></td>
 <td><center><?php echo $project->id; ?></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=add-new-project&id='.$project->id; ?>" >Edit</a></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=add-new-project&action=delete&id='.$project->id; ?>">Delete</a></center></td>



</tr>

<?php } ?>

</div>