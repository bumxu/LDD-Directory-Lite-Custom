<?php
$geo = ldl_get_value('geo');
if (!is_array($geo)) {
    $geo = array('lat'=>'','lng'=>'');
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <p class="section"><?php _e('Introduce la Dirección Correctamente.', 'ldd-directory-lite'); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label" for="f_title"><?php _e('Dirección', 'ldd-directory-lite'); ?></label>
                <input type="text" id="f_address_one" class="form-control" name="n_address_one" value="<?php echo ldl_get_value('address_one'); ?>" placeholder="<?php _e('Avenida Cabo de Gata, 78', 'ldd-directory-lite'); ?>">
                <input type="text" id="f_address_two" class="form-control bump-down" name="n_address_two" value="<?php echo ldl_get_value('address_two'); ?>" placeholder="<?php _e('Almería, España', 'ldd-directory-lite'); ?>">
                <?php echo ldl_get_error('address_one'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label" for="f_postal_code"><?php _e('Código Postal', 'ldd-directory-lite'); ?></label>
                <input type="text" id="f_postal_code" class="form-control" name="n_postal_code" value="<?php echo ldl_get_value('postal_code'); ?>" placeholder="<?php _e('04008', 'ldd-directory-lite'); ?>">
                <?php echo ldl_get_error('postal_code'); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label" for="f_country"><?php _e('País', 'ldd-directory-lite'); ?></label>
                <input type="text" id="f_country" class="form-control" name="n_country" value="<?php echo ldl_get_value('country'); ?>" placeholder="<?php _e('España', 'ldd-directory-lite'); ?>">
                <?php echo ldl_get_error('country'); ?>
            </div>
        </div>
    </div>
    <?php if (ldl_use_google_maps()): ?>
    <div class="row bump-down">
		<div class="col-md-12">
			<p><?php _e('Intenta localizar tu Finca en el mapa para que los usuarios vean dónde estás. Intenta que sea lo más real posible', 'ldd-directory-lite'); ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<label class="control-label" for="geo"><?php _e('Pon el marcador en la dirección exacta', 'ldd-directory-lite'); ?></label>
			<input type="text" id="geo" class="form-control autocomplete-control">
			<div id="map-canvas"></div>
			    <input type="hidden" id="lat" name="n_geo[lat]" value="<?php echo $geo['lat']; ?>">
			    <input type="hidden" id="lng" name="n_geo[lng]" value="<?php echo $geo['lng']; ?>">
            <?php echo ldl_get_error('geo'); ?>
		</div>
	</div>
    <?php endif; ?>
</div>
