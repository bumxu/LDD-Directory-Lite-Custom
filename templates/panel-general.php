<div class="container-fluid">
	<?php if (ldl()->get_option('submit_intro')): ?>
    <div class="row">
		<div class="col-md-12">
            <?php echo wpautop(ldl()->get_option('submit_intro')); ?>
		</div>
	</div>
    <?php endif; ?>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for="f_title"><?php _e('Nombre de la Finca', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_title" class="form-control" name="n_title" value="<?php echo ldl_get_value('title'); ?>" required>
				<?php echo ldl_get_error('title'); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label" for="f_category"><?php _e('Ubicación', 'ldd-directory-lite'); ?></label>
				<?php ldl_submit_categories_dropdown( ldl_get_value('category'), 'category' ); ?>
				<?php echo ldl_get_error('category'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label" for="f_logo"><?php _e('Logo', 'ldd-directory-lite'); ?></label>
				<input type="file" id="f_logo" class="form-control" name="n_logo">
				<?php echo ldl_get_error('category'); ?>
			</div>
		</div>
	</div>
	<div class="row bump-down">
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label" for="f_description"><?php _e('Descripción de la Finca', 'ldd-directory-lite'); ?></label>
				<textarea id="f_description" class="form-control" name="n_description" rows="5" required><?php echo ldl_get_value('description'); ?></textarea>
				<?php echo ldl_get_error('description'); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label" for="f_summary"><?php _e('Palabras Clave para que te busquen', 'ldd-directory-lite'); ?></label>
				<input type="text" id="f_summary" class="form-control" name="n_summary" value="<?php echo ldl_get_value('summary'); ?>" required>
				<?php echo ldl_get_error('summary'); ?>
				<p class="help-block"><?php _e('Introduce las palabras clave separadas por comas.', 'ldd-directory-lite'); ?></p>
			</div>
		</div>
	</div>
</div>
