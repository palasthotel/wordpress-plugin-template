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