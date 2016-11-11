<?php 
$title = "MAINTENANCE MODE"; 
include(GWTB_PLUGIN_DIR . 'views/header.php');
?>
<div class="container">
	<div class="row">
		<div class="ten offset-by-one columns text-center">
			<form name="maintenance-switch" method="post" action="<?php echo admin_url( 'admin.php' ); ?>">
				<input type="hidden" name="action" value="gwtb_maintenance_switch" />
				<?php wp_nonce_field()?>
					<?php $mm = get_option('gwtb-mm'); ?>
	    		<?php if($mm['switch']) : ?>
	    			<input type="image" name="submit" class="switch" src="<?php echo plugin_dir_url(dirname(__FILE__)) . '/images/switch-on.jpg' ?>" border="0" alt="Submit"><br>
	    		<?php else : ?>
	    			<input type="image" name="submit" class="switch" src="<?php echo plugin_dir_url(dirname(__FILE__)) . '/images/switch-off.jpg' ?>" border="0" alt="Submit" /><br>
	    		<?php endif ?>
	    		
				</form>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">

		<div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Logo</h2>
			</div>
			<div class="admin-card-body">
				<?php $settings = array (
	          'id' => 'gwtb_maintenance',
	          'image-size' => "full"
	          ); ?>
	    	<?php graphw_media_uploader($settings); ?>
	    </div>
    </div>

    <div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Background</h2>
			</div>
			<div class="admin-card-body">
			</div>
		</div>

	</div>
	<div class="row">

		<div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Page Text</h2>
			</div>
			<div class="admin-card-body">
			</div>
		</div>
	  <div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Ninja forms</h2>
			</div>
			<div class="admin-card-body">
			</div>
		</div>
  </div>
</div>
<?php
include(GWTB_PLUGIN_DIR . 'views/footer.php');
?>