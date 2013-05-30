<div class="span10">
	<div class="content">
		<?php echo form_open($form_action, array('class' => 'form-horizontal')); ?>
		<input type="hidden" name="cdate" value="<?php echo date("Y-m-d G:i:s"); ?>" id="cdate"/>
		<input type="hidden" name="id" value="<?= $tickets['id']; ?>" id="id"/>
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
			<legend>Тикет № <?php echo $tickets['id']; ?></legend>
			<div class="control-group">
				<label for="name" class="control-label">Открыл:</label>

				<div class="controls">
					<input type="text" name="open" value="<?= $tickets['open']; ?>" id="open" class="input-xlarge"
					       readonly/>
					<span class="help-inline"><?php echo form_error('open'); ?></span>
				</div>
			</div>
			<div class="control-group">
				<label for="subunit" class="control-label">Подразделение:</label>

				<div class="controls">
					<input type="text" name="subunit" value="<?= $tickets['subunit']; ?>" id="subunit"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="responsible" class="control-label">Ответственный:</label>

				<div class="controls">
					<input type="text" name="responsible" value="<?= $tickets['responsible']; ?>" id="responsible"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="date" class="control-label">Дата:</label>

				<div class="controls">
					<input type="text" name="date" value="<?= $tickets['date']; ?>" id="date" class="input-xlarge"
					       readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="name" class="control-label">Ф.И.О. или №:</label>

				<div class="controls">
					<input type="text" name="name" value="<?= $tickets['name']; ?>" id="name" class="input-xlarge"
					       readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="phone" class="control-label">Контактный номер:</label>

				<div class="controls">
					<input type="text" name="phone" value="<?= $tickets['phone']; ?>" id="phone" class="input-xlarge"
					       readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="address" class="control-label">Адрес:</label>

				<div class="controls">
					<input type="text" name="address" value="<?= $tickets['address']; ?>" id="address"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="description" class="control-label">Описание неисправности:</label>

				<div class="controls">
					<input type="text" name="description" value="<?= $tickets['description']; ?>" id="description"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="comment" class="control-label">Описание проделанной работы:</label>

				<div class="controls">
					<input type="text" name="comment" value="<?= $tickets['comment']; ?>" id="comment"
					       class="input-xlarge"/>
				</div>
			</div>
			<div class="control-group">
				<label for="close_checkbox" class="control-label">Закрыть тикет:</label>

				<div class="controls">
					<input type="checkbox" name="close_checkbox" id="close_checkbox" class="input-xlarge"/>
				</div>
			</div>
			<div class="form-actions">
				<button class="btn btn-primary" type="submit">Сохранить</button>
				<?php echo anchor('tickets', 'Отменить', 'class="btn"'); ?>
			</div>
		</fieldset>
		<?php echo form_close(); ?>

	</div>
</div>