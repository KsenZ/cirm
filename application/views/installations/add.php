<div class="span10">
	<div class="content">
		<?php
		echo form_open($form_action, array('class' => 'form-horizontal'));
		?>
		<input type="hidden" name="date" value="<?php echo date("Y-m-d G:i:s"); ?>" id="date"/>
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
			<legend>Новое подключение</legend>
			<div class="control-group<?php if (form_error('name')) echo ' error'; ?>">
				<label for="name" class="control-label">Ф.И.О. абонента:</label>

				<div class="controls">
					<input type="text" name="name" value="" id="name" class="input-xlarge"/>
					<span class="help-inline"><?php echo form_error('name'); ?></span>
				</div>
			</div>
			<div class="control-group">
				<label for="ls_num" class="control-label">Л/С или №:</label>

				<div class="controls">
					<input type="text" name="ls_num" value="" id="ls_num" class="input-xlarge"/>
				</div>
			</div>
			<div class="control-group<?php if (form_error('phone')) echo ' error'; ?>">
				<label for="contact" class="control-label">Контактный номер:</label>

				<div class="controls">
					<input type="text" name="contact" value="" id="contact" class="input-xlarge"/>
				</div>
			</div>
			<div class="control-group<?php if (form_error('address')) echo ' error'; ?>">
				<label for="address" class="control-label">Адрес абонента:</label>

				<div class="controls">
					<input type="text" name="address" value="" id="address" class="input-xlarge"/>
				</div>
			</div>
			<div class="control-group">
				<label for="date" class="control-label">Дата установки:</label>

				<div class="controls">
					<input type="text" name="date" value="" id="datepicker_edit" class="input-xlarge"/>
				</div>
			</div>
			<div class="control-group">
				<label for="type" class="control-label">Тип установки:</label>

				<div class="controls">
					<select name="type" size="1">
						<option value="Интернет">Интернет</option>
						<option value="Телефон">Телефон</option>
						<option value="Интернет+Телефон">Интернет+Телефон</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label for="responsible" class="control-label">Ответственный:</label>

				<div class="controls">
					<select name="responsible" size="1">
						<?php
						$users = $this->ion_auth->users()->result();
						foreach ($users as $user):?>
							<option
								value="<?= $user->first_name; ?> <?= $user->last_name; ?>"><?= $user->first_name; ?> <?= $user->last_name; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label for="description" class="control-label">Комментарий:</label>

				<div class="controls">
					<input type="text" name="description" value="" id="description" class="input-xlarge"/>
				</div>
			</div>
			<div class="form-actions">
				<button class="btn btn-primary" type="submit">Сохранить</button>
				<?php echo anchor('installations', 'Отменить', 'class="btn"'); ?>
			</div>
		</fieldset>
		<?php echo form_close(); ?>
	</div>
</div>