<div class="span10">
	<div class="content">
		<?php
		echo form_open($form_action, array('class' => 'form-horizontal'));
		?>
		<input type="hidden" name="date" value="<?php echo date("Y-m-d G:i:s"); ?>" id="date"/>
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
			<legend>Новый ремлист</legend>
			<div class="control-group<?php if (form_error('client')) echo ' error'; ?>">
				<label for="client" class="control-label">Клиент:</label>

				<div class="controls">
					<input type="text" name="client" value="" id="client" class="input-xlarge"/>
					<span class="help-inline"><?php echo form_error('client'); ?></span>
				</div>
			</div>
			<div class="control-group<?php if (form_error('phone')) echo ' error'; ?>">
				<label for="phone" class="control-label">Контактный номер:</label>

				<div class="controls">
					<input type="text" name="phone" value="" id="phone" class="input-xlarge"/>
					<span class="help-inline"><?php echo form_error('phone'); ?></span>
				</div>
			</div>
			<div class="control-group">
				<label for="product" class="control-label">Изделие:</label>

				<div class="controls">
					<input type="text" name="product" value="" id="product" class="input-xlarge"/>
				</div>
			</div>
			<div class="control-group<?php if (form_error('sn')) echo ' error'; ?>">
				<label for="sn" class="control-label">Серийный номер:</label>

				<div class="controls">
					<input type="text" name="sn" value="" id="sn" class="input-xlarge"/>
					<span class="help-inline"><?php echo form_error('sn'); ?></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Комплектация:</label>

				<div class="controls">
					<input type="checkbox" name="box" id="box" value="1"> Коробка
					<input type="checkbox" name="wire" id="wire" value="1"> Провода
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Состояние:</label>

				<div class="controls">
					<input type="checkbox" name="sh" id="sh" value="1"> Б/У
					<input type="checkbox" name="attrition" id="attrition" value="1"> Потертости
					<input type="checkbox" name="scratch" id="scratch" value="1"> Царапины
					<input type="checkbox" name="new" id="new" value="1"> Новое
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Сдано для:</label>

				<div class="controls">
					<input type="checkbox" name="diag" id="diag" value="1"> Диагностика
					<input type="checkbox" name="repair" id="repair" value="1"> Ремонт
				</div>
			</div>
			<div class="control-group">
				<label for="description" class="control-label">Описание неисправности:</label>

				<div class="controls">
					<input type="text" name="description" value="" id="description" class="input-xlarge"/>
				</div>
			</div>
			<div class="control-group">
				<label for="responsible" class="control-label">Ответственный:</label>

				<div class="controls">
					<select name="responsible" size="1">
						<?php
						$users = $this->ion_auth->users(5)->result();
						foreach ($users as $user):?>
							<option
								value="<?= $user->first_name; ?> <?= $user->last_name; ?>"><?= $user->first_name; ?> <?= $user->last_name; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="form-actions">
				<button class="btn btn-primary" type="submit">Сохранить</button>
				<?php echo anchor('repairs', 'Отменить', 'class="btn"'); ?>
			</div>
		</fieldset>
		<?php echo form_close(); ?>

	</div>
</div>