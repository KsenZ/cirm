<? header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>CiRM</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="<? echo base_url('/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<? echo base_url('/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<? echo base_url('/css/style.css'); ?>" rel="stylesheet">

	<link rel="shortcut icon" href="<? echo base_url('img/favicon.ico'); ?>">

</head>
<body>
<div class="header" align=center>
	<h1>CiRM</h1>
</div>
<div class="content" align=center>
	<h3><?php echo lang('login_heading'); ?></h3>

	<p><?php echo lang('login_subheading'); ?></p>

	<div id="infoMessage"><?php echo $message; ?></div>

	<?php echo form_open("auth/login", array('class' => 'form-inline')); ?>

	<p>
		<?php echo lang('login_identity_label', 'indentity'); ?>
		<?php echo form_input($identity); ?>
	</p>

	<p>
		<?php echo lang('login_password_label', 'password'); ?>
		<?php echo form_input($password); ?>
	</p>

	<p>
		<?php echo lang('login_remember_label', 'remember'); ?>
		<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
	</p>


	<p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

	<?php echo form_close(); ?>

	<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>

	<footer align=center>
		<p>&copy; CiRM 2013</p>
		<?php   $CI = & get_instance();
		$mq = $CI->db->query_count;
		printf('Время генирации: {elapsed_time} | Колличество SQL запросов: %s | Потребление памяти: {memory_usage}', $mq); ?>
	</footer>

	<script src="<? echo base_url('/js/jquery-1.7.1.min.js'); ?>"></script>
	<script src="<? echo base_url('/js/bootstrap.js'); ?>"></script>
</div>
</body>
</html>