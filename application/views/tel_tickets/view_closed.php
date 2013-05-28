<div class="span10">
	<div class="content">
		<?php echo form_open($form_action, array('class' => 'form-horizontal')); ?>
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
			<legend>Тикет № <?php echo $tickets['id']; ?></legend>
			<div class="control-group">
				<label for="name" class="control-label">Открыл:</label>

				<div class="controls">
					<input type="text" name="open" value="<?php echo set_value('open', $tickets['open']); ?>" id="open"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="responsible" class="control-label">Ответственный:</label>

				<div class="controls">
					<input type="text" name="responsible"
					       value="<?php echo set_value('responsible', $tickets['responsible']); ?>" id="responsible"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="close" class="control-label">Закрыл:</label>

				<div class="controls">
					<input type="text" name="close" value="<?php echo set_value('close', $tickets['close']); ?>"
					       id="close" class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="date" class="control-label">Дата:</label>

				<div class="controls">
					<input type="text" name="date" value="<?php echo set_value('date', $tickets['date']); ?>" id="date"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="phone" class="control-label">Телефон:</label>

				<div class="controls">
					<input type="text" name="phone" value="<?php echo set_value('phone', $tickets['phone']); ?>"
					       id="phone" class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="phone" class="control-label">Контактный номер:</label>

				<div class="controls">
					<input type="text" name="phone" value="<?php echo set_value('phone', $tickets['phone']); ?>"
					       id="phone" class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="address" class="control-label">Адрес:</label>

				<div class="controls">
					<input type="text" name="address" value="<?php echo set_value('address', $tickets['address']); ?>"
					       id="address" class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="description" class="control-label">Описание неисправности:</label>

				<div class="controls">
					<input type="text" name="description"
					       value="<?php echo set_value('description', $tickets['description']); ?>" id="description"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="comment" class="control-label">Описание проделанной работы:</label>

				<div class="controls">
					<input type="text" name="comment" value="<?php echo set_value('comment', $tickets['comment']); ?>"
					       id="comment" class="input-xlarge" readonly/>
				</div>
		</fieldset>
		<?php echo form_close(); ?>

	</div>
</div>