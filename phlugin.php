<?php 
/**
 * Plugin Name: PALASTHOTEL phlugin
 * Description: 
 * Version: 1.0
 * Author: PALASTHOTEL by Firstnam Lastname
 * Author URI: http://palasthotel.de/
 * License: GPLv2 or later
 * 
 */	





/* Hook into the Logout */

function phlugin_logout_function(){
	global $current_user;
	// Do stuff with the User here, for example
}
add_action('clear_auth_cookie', 'phlugin_logout_function',1);




/** ## Meta Boxes beyond that point **/

/**
 * Register meta box(es).
 */
function phlugin_register_meta_boxes() {
    add_meta_box( 'phlugin-meta-box-id', __( 'My Meta Box', 'phlugin' ), 'phlugin_my_display_callback', 'post' );
}
add_action( 'add_meta_boxes', 'phlugin_register_meta_boxes' );
 
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function phlugin_my_display_callback( $post ) {
    // Display code/markup goes here. Don't forget to include nonces!
}
 
/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function phlugin_save_meta_box( $post_id ) {
    // Save logic goes here. Don't forget to include nonce checks!
}
add_action( 'save_post', 'phlugin_save_meta_box' );

