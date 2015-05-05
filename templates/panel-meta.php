<div class="container-fluid">
	<div class="row bump-down">
		<div class="col-md-12">
			<p class="section"><?php _e('La siguiente información hará que tu Finca tenga más visibilidad a través de internet. Verifica que todos los datos sean correctos'); ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for=""><?php _e('Email', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_contact_email" class="form-control" name="n_contact_email" value="<?php echo ldl_get_value('contact_email'); ?>">
                <?php echo ldl_get_error('contact_email'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for=""><?php _e('Teléfono', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_contact_phone" class="form-control" name="n_contact_phone" value="<?php echo ldl_get_value('contact_phone'); ?>">
                <?php echo ldl_get_error('contact_phone'); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for=""><?php _e('Fax', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_contact_fax" class="form-control" name="n_contact_fax" value="<?php echo ldl_get_value('contact_fax'); ?>">
                <?php echo ldl_get_error('contact_fax'); ?>
			</div>
		</div>
	</div>
	<div class="row bump-down">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for=""><?php _e('Website', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_url_website" class="form-control" name="n_url_website" value="<?php echo ldl_get_value( 'url_website' ); ?>">
				<p class="help-block"><?php _e("Ejemplo:'http://www.tusitio.com'", 'ldd-directory-lite'); ?></p>
                <?php echo ldl_get_error('url_website'); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for=""><?php _e('Facebook', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_url_facebook" class="form-control" name="n_url_facebook" value="<?php echo ldl_get_value( 'url_facebook' ); ?>">
				<p class="help-block"><?php _e('https://www.facebook.com/germanyvero', 'ldd-directory-lite'); ?></p>
                <?php echo ldl_get_error('url_facebook'); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for=""><?php _e('Twitter', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_url_twitter" class="form-control" name="n_url_twitter" value="<?php echo ldl_get_value( 'url_twitter' ); ?>">
				<p class="help-block"><?php _e("Debe ser similar a esto 'https://twitter.com/<strong>username</strong>'", 'ldd-directory-lite'); ?></p>
                <?php echo ldl_get_error('url_twitter'); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for=""><?php _e('Linkedin', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_url_linkedin" class="form-control" name="n_url_linkedin" value="<?php echo ldl_get_value( 'url_linkedin' ); ?>">
				<p class="help-block"><?php _e('Ayuda para localizar tu <a href="http://help.linkedin.com/app/answers/detail/a_id/85/~/promoting-your-public-profile" title="Promoting Your Public Profile | LinkedIn Help Center">Perfil de Linkedin</a>', 'ldd-directory-lite'); ?></p>
                <?php echo ldl_get_error('url_linkedin'); ?>
			</div>
		</div>
	</div>
</div>

