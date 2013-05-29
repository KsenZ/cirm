<div class="span10">
	<div class="content">
		<?php echo form_open($form_action, array('class' => 'form-horizontal')); ?>
		<input type="hidden" name="cdate" value="<?php echo date("Y-m-d G:i:s"); ?>" id="cdate"/>
		<input type="hidden" name="id" value="<?= $repairs['id']; ?>" id="id"/>
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
			<legend>Ремлист № <?php echo $repairs['id']; ?></legend>
			<div class="control-group">
				<label for="name" class="control-label">Открыл:</label>

				<div class="controls">
					<input type="text" name="open" value="<?= $repairs['open']; ?>" id="open" class="input-xlarge"
					       readonly/>
					<span class="help-inline"><?php echo form_error('open'); ?></span>
				</div>
			</div>
			<div class="control-group">
				<label for="responsible" class="control-label">Ответственный:</label>

				<div class="controls">
					<input type="text" name="responsible" value="<?= $repairs['responsible']; ?>" id="responsible"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="date" class="control-label">Дата приемки:</label>

				<div class="controls">
					<input type="text" name="date" value="<?= $repairs['date']; ?>" id="date" class="input-xlarge"
					       readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="client" class="control-label">Клиент:</label>

				<div class="controls">
					<input type="text" name="client" value="<?= $repairs['client']; ?>" id="client" class="input-xlarge"
					       readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="phone" class="control-label">Контактный номер:</label>

				<div class="controls">
					<input type="text" name="phone" value="<?= $repairs['phone']; ?>" id="phone" class="input-xlarge"
					       readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="product" class="control-label">Изделие:</label>

				<div class="controls">
					<input type="text" name="product" value="<?= $repairs['product']; ?>" id="product"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="sn" class="control-label">Серийный номер:</label>

				<div class="controls">
					<input type="text" name="sn" value="<?= $repairs['sn']; ?>" id="sn" class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Комплектация:</label>

				<div class="controls">
					<input type="checkbox" name="box" id="box" value="1" <?php if ($repairs['box'] == 1) {
						echo "checked";
					} ?>> Коробка
					<input type="checkbox" name="wire" id="wire" value="1" <?php if ($repairs['wire'] == 1) {
						echo "checked";
					} ?>> Провода
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Состояние:</label>

				<div class="controls">
					<input type="checkbox" name="sh" id="sh" value="1" <?php if ($repairs['sh'] == 1) {
						echo "checked";
					} ?>> Б/У
					<input type="checkbox" name="attrition" id="attrition"
					       value="1" <?php if ($repairs['attrition'] == 1) {
						echo "checked";
					} ?>> Потертости
					<input type="checkbox" name="scratch" id="scratch" value="1" <?php if ($repairs['scratch'] == 1) {
						echo "checked";
					} ?>> Царапины
					<input type="checkbox" name="new" id="new" value="1" <?php if ($repairs['new'] == 1) {
						echo "checked";
					} ?>> Новое
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Сдано для:</label>

				<div class="controls">
					<input type="checkbox" name="diag" id="diag" value="1" <?php if ($repairs['diag'] == 1) {
						echo "checked";
					} ?>> Диагностика
					<input type="checkbox" name="repair" id="repair" value="1" <?php if ($repairs['repair'] == 1) {
						echo "checked";
					} ?>> Ремонт
				</div>
			</div>
			<div class="control-group">
				<label for="description" class="control-label">Описание неисправности:</label>

				<div class="controls">
					<input type="text" name="description" value="<?= $repairs['description']; ?>" id="description"
					       class="input-xlarge" readonly/>
				</div>
			</div>
			<div class="control-group">
				<label for="comment" class="control-label">Описание проделанной работы:</label>

				<div class="controls">
					<input type="text" name="comment" value="<?= $repairs['comment']; ?>" id="comment"
					       class="input-xlarge"/>
					<span class="help-inline"><?php echo form_error('comment'); ?></span>
				</div>
			</div>
			<div class="control-group">
				<label for="cost" class="control-label">Стоймость ремонта:</label>

				<div class="controls">
					<select name="cost" id="cost">
						<option value="0">Выберите стоймость</option>
						<? foreach ($services as $service) : ?>
							<option value="<?= $service['cost'] ?>"
							        <? if ($repairs['cost'] == $service['cost']) { ?>selected="selected"<? } ?>><?= $service['description'] ?></option>
						<? endforeach; ?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label for="close_checkbox" class="control-label">Выдано клиенту:</label>

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