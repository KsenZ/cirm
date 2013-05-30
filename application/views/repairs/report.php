<div class="span10">
	<div class="content">
		<?php
		echo form_open($form_action, array('class' => 'form-horizontal'));
		?>
		<div class="controls">
			<select name="username" size="1">
				<?php
				$users = $this->ion_auth->users(5)->result();
				foreach ($users as $user):?>
					<option
						value="<?= $user->first_name; ?> <?= $user->last_name; ?>"><?= $user->first_name; ?> <?= $user->last_name; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="control-group">
			<label for="close" class="control-label">Сумма:</label>

			<div class="controls">
				<input type="text" name="cost" value="<?= $sum_cost; ?>" id="cost" class="input-xlarge" readonly/>
			</div>
		</div>
		<div class="form-actions">
			<button class="btn btn-primary" name="report" type="submit">Свормировать</button>
			<?php echo anchor('repairs', 'Отменить', 'class="btn"'); ?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>