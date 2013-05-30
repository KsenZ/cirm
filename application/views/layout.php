<? header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>CiRM</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<script src="<? echo base_url('/js/jquery-2.0.0.js'); ?>"></script>
	<script src="<? echo base_url('/js/jqueryui/ui/jquery-ui.js'); ?>"></script>
	<script src="<? echo base_url('/js/jqueryui/ui/i18n/jquery.ui.datepicker-ru.js'); ?>"></script>
	<script src="<? echo base_url('/js/bootstrap.js'); ?>"></script>
	<script src="<? echo base_url('/js/bootstrap-tab.js'); ?>"></script>

	<link href="<? echo base_url('/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<? echo base_url('/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<? echo base_url('/css/style.css'); ?>" rel="stylesheet">
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" rel="stylesheet"
	      type="text/css"/>

	<link rel="shortcut icon" href="<? echo base_url('img/favicon.ico'); ?>">

	<script type="text/javascript">
		var $d = jQuery.noConflict();
		$d(document).ready(function () {

			// Указываем дейтпикеру что выводить все нужно на русском
			$d.datepicker.setDefaults($d.datepicker.regional['ru']);
			$d('#datepicker_edit').datepicker();
			$d('#datepicker_edit').datepicker("option", "dateFormat", 'yy-mm-dd');
		});
	</script>

</head>
<body>
<div class="header" align=center>
	<h1>CiRM</h1>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<div class="sidebar-nav">
				<ul class="nav nav-list">
					<li class="nav-header">Меню</li>
					<li <? if ($this->uri->segment(1) == 'cirm' || $this->uri->segment(1) == '') echo 'class="active"'; ?> >
						<? echo anchor('cirm', '<i class="icon-home"></i> Главная'); ?>
					</li>
					<li <? if ($this->uri->segment(1) == 'tickets') echo 'class="active"'; ?> >
						<? echo anchor('tickets/display', '<i class="icon-globe"></i> Заявки'); ?>
					</li>
					<li <? if ($this->uri->segment(1) == 'installations') echo 'class="active"'; ?> >
						<? echo anchor('installations/display', '<i class="icon-sitemap"></i> Подключения'); ?>
					</li>
					<li <? if ($this->uri->segment(1) == 'repairs') echo 'class="active"'; ?> >
						<? echo anchor('repairs/display', '<i class="icon-wrench"></i> Ремонт'); ?>
					</li>
					<li class="nav-header">
						<hr/>
					</li>
					<li <? if ($this->uri->segment(2) == 'settings') echo 'class="active"'; ?> >
						<? if ($this->ion_auth->is_admin()) echo anchor('settings/index', '<i class="icon-cogs"></i> Настройки'); ?>
					</li>
					<li <? if ($this->uri->segment(2) == 'users') echo 'class="active"'; ?> >
						<? if ($this->ion_auth->is_admin()) echo anchor('auth/index', '<i class="icon-group"></i> Пользователи'); ?>
					</li>
					<li <? if ($this->uri->segment(2) == 'settings') echo 'class="active"'; ?> >
						<? if ($this->ion_auth->is_admin()) echo anchor('services/display', '<i class="icon-money"></i> Услуги'); ?>
					</li>
					<li <? if ($this->uri->segment(2) == 'help') echo 'class="active"'; ?> >
						<? echo anchor('page/help', '<i class="icon-question-sign"></i> Справка'); ?>
					</li>
					<li <? if ($this->uri->segment(2) == 'logout') echo 'class="active"'; ?> >
						<? echo anchor('cirm/logout', '<i class="icon-signout"></i> Выход'); ?>
					</li>
				</ul>
			</div>
			<!--/.well -->
		</div>
		<!--/span-->

		<? $this->load->view($part_name); ?>

	</div>
	<hr>

	<footer align=center>
		<p>&copy; CiRM 2013</p>
		<?php   $CI = & get_instance();
		$mq = $CI->db->query_count;
		printf('Время генирации: {elapsed_time} | Колличество SQL запросов: %s | Потребление памяти: {memory_usage}', $mq); ?>
	</footer>

</div>
</body>
</html>                