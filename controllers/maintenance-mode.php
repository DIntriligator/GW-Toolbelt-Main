<?php
add_action( 'admin_action_gwtb_maintenance_switch', 'gwtb_maintenance_switch_admin_action' );

function gwtb_maintenance_switch_admin_action(){
	if ( !current_user_can( 'manage_options' ) && wp_verify_nonce($retrieved_nonce))
  {
    wp_die( 'You are not allowed to be on this page.' );
  }
	$mm = get_option('gwtb-mm');

	if($mm['switch']){
		$mm['switch'] = false;
	} else {
		$mm['switch'] = true;
	}

	update_option('gwtb-mm', $mm);

	wp_redirect(  admin_url( 'admin.php?page=gwtb-mm') );
  exit;
}