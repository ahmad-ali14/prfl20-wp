<div class="wrap">
<h1 class="wp-heading-inline">Skills</h1> 

<a class="page-title-action"  href="<?php echo  home_url().'/wp-admin/admin.php?page=add-new-skill'; ?>" >Add New</a>

<br /> <br />

<hr class="wp-header-end">

<?php
global $wpdb;
$row = $wpdb->get_results("SELECT * FROM wp_skills");
?>

<table class="wp-list-table widefat fixed striped pages">
<thead>
<td><center>skill</center></td>
<td> <center>Last Updated </center></td>
<td><center> Id </center></td>
</thead>

<?php foreach($row as $doc){ ?>

<tr>
 <td><center><?php echo $doc->skill; ?></center></td>
 <td><center><?php echo $doc->time; ?></center></td>
 <td><center><?php echo $doc->id; ?></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=add-new-skill&id='.$doc->id; ?>" >Edit</a></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=add-new-skill&action=delete&id='.$doc->id; ?>">Delete</a></center></td>



</tr>

<?php } ?>

</div>