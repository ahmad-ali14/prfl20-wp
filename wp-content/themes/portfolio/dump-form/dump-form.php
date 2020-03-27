<?php 
/**
 * Template Name: Dump Form
 */
get_header();
$user_id = get_current_user_id();
echo $user_id;
?>

<form action="" method="post">
<label for="user-hobby">Hobby
		<input id="user-hobby" type="text" name="user-hobby" value="">
	</label>
	<label for="user-age">Age
		<input id="user-age" type="text" name="user-age" value="">
    </label>
    <input type="submit" name="submit" value="submit" />
</form>





<?php 

if ( ! function_exists( 'wf_insert_update_user_meta' ) ) {
	/**
	 * Creates a meta key and inserts the meta value.
	 * If the passed meta key already exists then updates the meta value.
	 *
	 * @param {int} $user_id User Id.
	 * @param {string} $meta_key Meta Key.
	 * @param {string} $meta_value Meta value.
	 *
	 * @return bool
	 */
	function wf_insert_update_user_meta( $user_id, $meta_key, $meta_value ) {

		// Add data in the user meta field.
		$meta_key_not_exists = add_user_meta( $user_id, $meta_key, $meta_value, true );

		// If meta key already exists then just update the meta value for and return true
		if ( ! $meta_key_not_exists ) {
			update_user_meta( $user_id, $meta_key, $meta_value );
			return true;
		}
	}
}

if ( isset( $_POST['submit'] ) ) {
    // Get form values.
	$hobby = ( ! empty( $_POST['user-hobby'] ) ) ? sanitize_text_field( $_POST['user-hobby'] ) : '';
    //$age = ( ! empty( $_POST['user-age'] ) ) ? intval( absint( $_POST['user-age'] ) ) : '';
    $age = ( ! empty( $_POST['user-age'] ) ) ? sanitize_text_field( $_POST['user-age'] ) : '';
    	// Insert/Update the form values to user_meta table.
	// wf_insert_update_user_meta( $user_id, 'user-hobby', $hobby );
	// wf_insert_update_user_meta( $user_id, 'user-age', $age );

	global $wpdb;

$name = "Ahmad";
$desc = "junior web dev";

$table_name =$wpdb->prefix."projects";

$wpdb->insert($table_name, 
    array(
        'time' => current_time('mysql'),
        'name' => $hobby,
        'text' => $age
    )
);

}
echo '<pre>';
print_r($_POST);
echo '</pre>';



get_footer();
?>