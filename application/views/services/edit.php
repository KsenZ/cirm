<div class="span10">
	<div class="content">
		<? echo form_open($form_action, array('class' => 'form-horizontal')); ?>
		<input type="hidden" name="id" value="<?= $services['id']; ?>" id="id"/>
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
			<legend>Редактирование услуги</legend>
			<div class="control-group" <? if (form_error('description')) echo ' error'; ?>>
				<label for="description" class="control-label">Описание услуги:</label>

				<div class="controls">
					<input type="text" name="description" value="<?= $services['description']; ?>" id="description"
					       class="input-xlarge"/>
					<span class="help-inline"><? echo form_error('description'); ?></span>
				</div>
			</div>
			<div class="control-group" <? if (form_error('cost')) echo ' error'; ?>>
				<label for="cost" class="control-label">Стоймость:</label>

				<div class="controls">
					<input type="text" name="cost" value="<?= $services['cost']; ?>" id="cost" class="input-xlarge"/>
					<span class="help-inline"><? echo form_error('cost'); ?></span>
				</div>
			</div>
			<div class="form-actions">
				<button class="btn btn-primary" type="submit">Сохранить</button>
				<? echo anchor('services', 'Отменить', 'class="btn"'); ?>
			</div>
		</fieldset>
		<? echo form_close(); ?>
	</div>
</div>