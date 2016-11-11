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
	<form name="maintenance-update" method="post" action="<?php echo admin_url( 'admin.php' ); ?>">
		<input type="hidden" name="action" value="gwtb_maintenance_update" />
	<div class="row">
		<div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Logo</h2>
			</div>
			<div class="admin-card-body">
				<?php $settings = array (
	          'id' => 'gwtb_logo',
	          'image-size' => "full",
	          'button-text' => 'Add Image',
	          'any-file' => 'yes'
	          ); ?>
	    	<?php graphw_media_uploader($settings); ?>
	    </div>
    </div>

    <div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Background</h2>
			</div>
			<div class="admin-card-body text-center">
				<?php $settings = array (
	          'id' => 'mm-bg-photo',
	          'image-size' => "full",
	          'button-text' => 'Add Background Image',
	          'any-file' => 'no'
	          ); ?>
	    	<?php graphw_media_uploader($settings); ?>
	    	<p><b>OR</b><p>
	    	<input type="text" name="mm-bg-color" class="color-picker" value="">
			</div>
		</div>

	</div>
	<div class="row">

		<div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Page Text</h2>
			</div>
			<div class="admin-card-body">
				<label>Company Name:</label>
				<input type="text" name="company-name"><br><br>
				<label>Page Title:</label>
				<input type="text" name="page-title"><br><br>
				<label>Content:</label>
				<textarea class="mm-textarea" name="page-text"></textarea>

			</div>
		</div>
	  <div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Styles</h2>
			</div>
			<div class="admin-card-body text-center">
				<label>Button Color:</label>
				<input type="text" name="mm-button-color" class="color-picker" value="">
				<label>Company Name Color:</label>
				<input type="text" name="mm-company-name-color" class="color-picker" value="">
				<label>Page Title Color:</label>
				<input type="text" name="mm-page-title-color" class="color-picker" value="">
				<label>Page Text Color:</label>
				<input type="text" name="mm-page-text-color" class="color-picker" value="">
				<label>Custom Css</label>
				<textarea class="mm-textarea" name="custom-css"></textarea>
			</div>
		</div>
  </div>
  <div class="row">
  	<div class="six columns admin-card">
	  	<div class="admin-card-title">
				<h2 class="text-center">Ninja forms</h2>
			</div>
			<div class="admin-card-body">

    		
			</div>
		</div>
  </div>
</form>
</div>
<?php
include(GWTB_PLUGIN_DIR . 'views/footer.php');
?>