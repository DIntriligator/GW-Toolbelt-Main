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
		if ($delete_page = get_page_by_name('gwtb-maintenance')){
      wp_delete_post($delete_page, true);
    }

	} else {
		$mm['switch'] = true;
		$new_page = array(
    'post_title' => 'GWTB Maintenance',
    'post_name' => 'maintenance',
    'post_status' => 'publish',
    'post_type' => 'page',
    'post_author' => $user_ID,
    'post_parent' => 0,
    'menu_order' => 0,
    'page_template' => 'page-maintenance-mode.php'
    );
    if ($delete_page = get_page_by_name('maintenance')){
      wp_delete_post($delete_page, true);
    }    
    $maintenance_page = wp_insert_post( $new_page );
    if ( $newpages ) {
      wp_cache_delete( 'all_page_ids', 'pages' );
      $wp_rewrite->flush_rules();
    }
	}



	update_option('gwtb-mm', $mm);

	wp_redirect(  admin_url( 'admin.php?page=gwtb-mm') );
  exit;
}


add_filter( 'template_include', 'gwtb_page_template', 99 );
function gwtb_page_template( $template ) {

	if ( is_page( get_page_by_name('maintenance') )  ) {
		$new_template = plugin_dir_path(dirname(__FILE__)) . 'views/mm-view.php';
		if ( '' != $new_template ) {
			return $new_template ;
		}
	}

	return $template;
}

add_action( 'wp_loaded', 'gwtb_redirect' );
function gwtb_redirect(){

	$mm = get_option('gwtb-mm');
	if($mm['switch']){
	 add_action( 'template_redirect', 'gwtb_maintenence_mode_on' );
	 function gwtb_maintenence_mode_on() {
	   if ( !is_page('maintenance') && !is_user_logged_in() && !is_page('wp_admin')) {
	     wp_redirect( '/maintenance' );
	    exit;
	  }
	 }
	}
}


function get_page_by_name($pagename){
	$pages = get_pages();
	foreach ($pages as $page){
	 if ($page->post_name == $pagename){
	    return $page->ID;
	  } else {
	    return false;
	  }
	}
}