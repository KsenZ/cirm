<div class="span10">
    <div class="content">
        <h1><?php echo lang('create_group_heading');?></h1>
        <p><?php echo lang('create_group_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open("auth/create_group", array('class' => 'form-inline'));?>

        <p>
            <?php echo lang('create_group_name_label', 'group_name');?> 
            <?php echo form_input($group_name);?>
        </p>

        <p>
            <?php echo lang('create_group_desc_label', 'description');?> 
            <?php echo form_input($description);?>
        </p>

        <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

        <?php echo form_close();?>
    </div>
</div>