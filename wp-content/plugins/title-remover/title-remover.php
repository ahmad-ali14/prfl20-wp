<?php
/*
Plugin Name: Title Remover
Plugin URI: http://wpgurus.net/title-remover/
Description: Gives you the ability to hide the title of any post, page or custom post type item without affecting menus or titles in the admin area.
Version: 1.2.1
Author: WPGurus
Author URI: http://wpgurus.net/
License: GPL2
*/

/**
 * Load plugin text domain
 */
function wptr_load_plugin_textdomain() {
	load_plugin_textdomain(
		'title-remover', false,
		dirname( plugin_basename( __FILE__ ) ) . '/languages'
	);
}

add_action( 'plugins_loaded', 'wptr_load_plugin_textdomain' );

/**
 * Filter the title and return empty string if necessary.
 *
 * @param $title string The old title
 * @param int $post_id The post ID
 *
 * @return string Old title or empty string.
 */
function wptr_suppress_title( $title, $post_id = 0 ) {
	if ( ! $post_id ) {
		return $title;
	}

	$hide_title = get_post_meta( $post_id, 'wptr_hide_title', true );
	if ( ! is_admin() && is_singular() && intval( $hide_title ) && in_the_loop() ) {
		return '';
	}

	return $title;
}

add_filter( 'the_title', 'wptr_suppress_title', 10, 2 );

/*--------------------------------------------------
	MetaBox
----------------------------------------------------*/

add_action( 'load-post.php', 'wptr_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'wptr_post_meta_boxes_setup' );

function wptr_post_meta_boxes_setup() {
	/* Add meta boxes on the 'add_meta_boxes' hook. */
	add_action( 'add_meta_boxes', 'wptr_add_post_meta_boxes' );

	/* Save post meta on the 'save_post' hook. */
	add_action( 'save_post', 'wptr_save_meta', 10, 2 );
}

function wptr_add_post_meta_boxes() {
	add_meta_box(
		'wptr-hide-title',
		esc_html__( 'Hide Title?', 'title-remover' ),
		'wptr_render_metabox',
		null,
		'side',
		'core'
	);
}

function wptr_render_metabox( $post ) {
	$curr_value = get_post_meta( $post->ID, 'wptr_hide_title', true );
	wp_nonce_field( basename( __FILE__ ), 'wptr_meta_nonce' );
	?>
	<input type="hidden" name="wptr-hide-title-checkbox" value="0"/>
	<input type="checkbox" name="wptr-hide-title-checkbox" id="wptr-hide-title-checkbox"
	       value="1" <?php checked( $curr_value, '1' ); ?> />
	<label for="wptr-hide-title-checkbox"><?php esc_html_e( 'Hide the title for this item', 'title-remover' ); ?></label>
	<?php
}

function wptr_save_meta( $post_id, $post ) {

	/* Verify the nonce before proceeding. */
	if ( ! isset( $_POST['wptr_meta_nonce'] ) || ! wp_verify_nonce( $_POST['wptr_meta_nonce'], basename( __FILE__ ) ) ) {
		return;
	}

	/* Get the post type object. */
	$post_type = get_post_type_object( $post->post_type );

	/* Check if the current user has permission to edit the post. */
	if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
		return;
	}

	/* Get the posted data and sanitize it for use as an HTML class. */
	$form_data = ( isset( $_POST['wptr-hide-title-checkbox'] ) ? $_POST['wptr-hide-title-checkbox'] : '0' );
	update_post_meta( $post_id, 'wptr_hide_title', $form_data );
}
