<div class="span10">
	<div class="content">
		<legend>Список
			услуг <?php echo anchor('services/add', '<i class="icon-file"></i> Добавить услугу', 'class="btn btn-small"'); ?></legend>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
				<th></th>
				<?php foreach ($fields as $field_name => $field_display) : ?>
					<th <?php if ($sort_by == $field_name) echo "class=\"sort-$sort_order\""; ?> >
						<?php echo anchor("services/display/$field_name/" . (($sort_order == 'asc' && $field_name == $sort_by) ? 'desc' : 'asc'), $field_display); ?>
					</th>
				<?php endforeach; ?>

			</tr>
			</thead>
			<tbody>
			<?php foreach ($services as $service): ?>
				<tr>
					<td>
						<?php echo anchor('services/edit/' . $service['id'], '<i class="icon-edit"></i>', array('title' => 'редактировать')); ?>
					</td>
					<?php foreach ($fields as $field_name => $field_display) : ?>
						<td><?php echo $service[$field_name] ?></td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<?php
		echo $pagination;
		?>
	</div>
</div>
