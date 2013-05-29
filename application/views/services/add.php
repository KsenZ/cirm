<div class="span10">
	<div class="content">
		<?php
		echo form_open($form_action, array('class' => 'form-horizontal'));
		?>
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
			<legend>Новая услуга</legend>
			<div class="control-group" <?php if (form_error('description')) echo ' error'; ?>>
				<label for="description" class="control-label">Описание услуги:</label>

				<div class="controls">
					<input type="text" name="description" value="" id="description" class="input-xlarge"/>
					<span class="help-inline"><?php echo form_error('description'); ?></span>
				</div>
			</div>
			<div class="control-group" <?php if (form_error('cost')) echo ' error'; ?>>
				<label for="cost" class="control-label">Стоймость:</label>

				<div class="controls">
					<input type="text" name="cost" value="" id="cost" class="input-xlarge"/>
					<span class="help-inline"><?php echo form_error('cost'); ?></span>
				</div>
			</div>
			<div class="form-actions">
				<button class="btn btn-primary" type="submit">Сохранить</button>
				<?php echo anchor('services', 'Отменить', 'class="btn"'); ?>
			</div>
		</fieldset>
		<?php echo form_close(); ?>
	</div>
</div>