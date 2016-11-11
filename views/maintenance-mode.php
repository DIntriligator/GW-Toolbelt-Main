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
				<div class="maintenance-checkbox">
					<?php $mm = get_option('gwtb-mm'); ?>
	    		<input type="checkbox" name="switch" value="true" id="switch" <?php if($mm){echo 'checked';}  ?>/>
	    		<label for="author<?php echo $index ?>" class="checkbox_label">Author</label><br>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
include(GWTB_PLUGIN_DIR . 'views/footer.php');
?>