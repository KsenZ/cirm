<div class="span10">
    <div class="content">
        <?php echo form_open($form_action, array('class' => 'form-horizontal'));?>
        <input type="hidden" name="cdate" value="<?php echo date("Y-m-d G:i:s"); ?>" id="cdate" />
        <input type="hidden" name="id" value="<?php echo set_value('id', $installations['id']); ?>" id="id" />
        <fieldset xmlns="http://www.w3.org/1999/xhtml">
            <legend>Подключение № <?php echo $installations['id']; ?></legend>
            <div class="control-group<?php if (form_error('name')) echo ' error'; ?>">
                <label for="name" class="control-label">Открыл:</label>
                <div class="controls">
                    <input type="text" name="open" value="<?php echo set_value('open', $installations['open']); ?>" id="open" class="input-xlarge" readonly/>
                    <span class="help-inline"><?php echo form_error('open'); ?></span>            
                </div>
            </div>
            <div class="control-group">
                <label for="responsible" class="control-label">Ответственный:</label>
                <div class="controls">
                    <input type="text" name="responsible" value="<?php echo set_value('responsible', $installations['responsible']); ?>" id="responsible" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="date" class="control-label">Дата подключения:</label>
                <div class="controls">
                    <input type="text" name="date" value="<?php echo set_value('date', $installations['date']); ?>" id="date" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="name" class="control-label">Ф.И.О. абонента:</label>
                <div class="controls">
                    <input type="text" name="name" value="<?php echo set_value('name', $installations['name']); ?>" id="name" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="ls_num" class="control-label">Л/С или №:</label>
                <div class="controls">
                    <input type="text" name="ls_num" value="<?php echo set_value('ls_num', $installations['ls_num']); ?>" id="ls_num" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="type" class="control-label">Тип установки:</label>
                <div class="controls">
                    <input type="text" name="type" value="<?php echo set_value('type', $installations['type']); ?>" id="type" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="phone" class="control-label">Контактный номер:</label>
                <div class="controls">
                    <input type="text" name="phone" value="<?php echo set_value('phone', $installations['contact']); ?>" id="phone" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="address" class="control-label">Адрес абонента:</label>
                <div class="controls">
                    <input type="text" name="address" value="<?php echo set_value('address', $installations['address']); ?>" id="address" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="description" class="control-label">Комментарий:</label>
                <div class="controls">
                    <input type="text" name="description" value="<?php echo set_value('description', $installations['description']); ?>" id="description" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="comment" class="control-label">Описание проделанной работы:</label>
                <div class="controls">
                    <input type="text" name="comment" value="<?php echo set_value('comment', $installations['comment']); ?>" id="comment" class="input-xlarge"/>
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