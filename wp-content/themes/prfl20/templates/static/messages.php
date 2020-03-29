<div class="wrap">
<h1 class="wp-heading-inline">Messages for you from your contact form </h1> 


<br /> <br />

<hr class="wp-header-end">

<?php
global $wpdb;
$row = $wpdb->get_results("SELECT * FROM wp_messages");
?>

<table class="wp-list-table widefat fixed striped pages">
<thead>
<td><center>Email</center></td>
<td> <center> Name </center></td>
<td> <center> Time </center></td>
<td><center> Id </center></td>
</thead>

<?php foreach($row as $doc){ ?>

<tr>
<td><center><?php echo $doc->email; ?></center></td>
 <td><center><?php echo $doc->name; ?></center></td>
 <td><center><?php echo $doc->time; ?></center></td>
 <td><center><?php echo $doc->id; ?></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=message&id='.$doc->id; ?>" >view</a></center></td>
 <td><center><a href="<?php  echo home_url().'/wp-admin/admin.php?page=message&action=delete&id='.$doc->id; ?>">Delete</a></center></td>



</tr>

<?php } ?>

</div>