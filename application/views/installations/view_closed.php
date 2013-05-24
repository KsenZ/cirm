<div class="span10">
    <div class="content">
        <?php echo form_open($form_action, array('class' => 'form-horizontal'));?>
        <fieldset xmlns="http://www.w3.org/1999/xhtml">
            <legend>Тикет № <?php echo $installations['id']; ?></legend>
            <div class="control-group">
                <label for="name" class="control-label">Открыл:</label>
                <div class="controls">
                    <input type="text" name="open" value="<?php echo set_value('open', $installations['open']); ?>" id="open" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="responsible" class="control-label">Ответственный:</label>
                <div class="controls">
                    <input type="text" name="responsible" value="<?php echo set_value('responsible', $installations['responsible']); ?>" id="responsible" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="close" class="control-label">Закрыл:</label>
                <div class="controls">
                    <input type="text" name="close" value="<?php echo set_value('close', $installations['close']); ?>" id="close" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="date" class="control-label">Дата установки:</label>
                <div class="controls">
                    <input type="text" name="date" value="<?php echo set_value('date', $installations['date']); ?>" id="date" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="cdate" class="control-label">Дата выполнения:</label>
                <div class="controls">
                    <input type="text" name="cdate" value="<?php echo set_value('cdate', $installations['cdate']); ?>" id="cdate" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="type" class="control-label">Тип установки:</label>
                <div class="controls">
                    <input type="text" name="type" value="<?php echo set_value('type', $installations['type']); ?>" id="type" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="name" class="control-label">Ф.И.О. абонента:</label>
                <div class="controls">
                    <input type="text" name="name" value="<?php echo set_value('name', $installations['name']); ?>" id="name" class="input-xlarge" readonly/>
                </div>
            </div>
            <div class="control-group">
                <label for="phone" class="control-label">Контактный номер:</label>
                <div class="controls">
                    <input type="text" name="phone" value="<?php echo set_value('phone', $installations['phone']); ?>" id="phone" class="input-xlarge" readonly/>
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
                    <input type="text" name="comment" value="<?php echo set_value('comment', $installations['comment']); ?>" id="comment" class="input-xlarge" readonly/>
                </div>
        </fieldset>
        <?php echo form_close(); ?>    

    </div>
</div>