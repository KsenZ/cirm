<div class="span10">
	<div class="content">
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#index" data-toggle="tab">Начало</a></li>
				<li><a href="#users" data-toggle="tab">Пользователи</a></li>
				<li><a href="#services" data-toggle="tab">Услуги</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="index">
					<div class="hero-unit" align=center>
						Панель настроек CiRM.
					</div>
				</div>
				<div class="tab-pane" id="users">

					<h2><?php echo lang('index_heading'); ?></h2>

					<p><?php echo anchor("auth/create_user", '<i class="icon-user"></i> ' . lang('index_create_user_link'), 'class="btn btn-small"') ?>
						| <?php echo anchor('auth/create_group', '<i class="icon-group"></i> ' . lang('index_create_group_link'), 'class="btn btn-small"') ?></p>

					<p><?php echo lang('index_subheading'); ?></p>

					<div id="infoMessage"><?php echo $message; ?></div>

					<table class="table table-striped table-bordered table-condensed">
						<thead>
						<tr>
							<th><?php echo lang('index_fname_th'); ?></th>
							<th><?php echo lang('index_lname_th'); ?></th>
							<th><?php echo lang('index_email_th'); ?></th>
							<th><?php echo lang('index_groups_th'); ?></th>
							<th><?php echo lang('index_status_th'); ?></th>
							<th><?php echo lang('index_action_th'); ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo $user->first_name; ?></td>
								<td><?php echo $user->last_name; ?></td>
								<td><?php echo $user->email; ?></td>
								<td>
									<?php foreach ($user->groups as $group): ?>
										<?php echo anchor("auth/edit_group/" . $group->id, $group->name); ?><br/>
									<?php endforeach ?>
								</td>
								<td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
								<td><?php echo anchor("auth/edit_user/" . $user->id, 'Редактировать'); ?>
									| <?php echo anchor("cirm/del_user/" . $user->id, 'Удалить'); ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="services">
					<h2>Услуги</h2>
				</div>
			</div>
		</div>
	</div>
</div>