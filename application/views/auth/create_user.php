<div class="span10">
    <div class="content">
        <h1><?php echo lang('create_user_heading');?></h1>
        <p><?php echo lang('create_user_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open("auth/create_user", array('class' => 'form-inline'));?>

        <p>
            <?php echo lang('create_user_fname_label', 'first_name');?>
            <?php echo form_input($first_name);?>
        </p>

        <p>
            <?php echo lang('create_user_lname_label', 'first_name');?> 
            <?php echo form_input($last_name);?>
        </p>

        <p>
            <?php echo lang('create_user_company_label', 'company');?>
            <?php echo form_input($company);?>
        </p>

        <p>
            <?php echo lang('create_user_email_label', 'email');?>
            <?php echo form_input($email);?>
        </p>

        <p>
            <?php echo lang('create_user_phone_label', 'phone');?>
            <?php echo form_input($phone1);?>-<?php echo form_input($phone2);?>-<?php echo form_input($phone3);?>
        </p>

        <p>
            <?php echo lang('create_user_password_label', 'password');?> 
            <?php echo form_input($password);?>
        </p>

        <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
            <?php echo form_input($password_confirm);?>
        </p>


        <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

        <?php echo form_close();?>
    </div>
</div>