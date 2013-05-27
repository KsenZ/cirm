<div class="span10">
    <div class="content">
        <legend>Список ремлистов <?php echo anchor('repairs/add', '<i class="icon-file"></i> Добавить новый', 'class="btn btn-small"'); ?> | <?php echo anchor('repairs/display_closed', '<i class="icon-remove-circle"></i> Посмотреть выполненные', 'class="btn btn-small"'); ?></legend>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
                <th></th>
                <?php foreach ($fields as $field_name => $field_display) : ?>
                    <th <?php if ($sort_by == $field_name) echo "class=\"sort-$sort_order\""; ?> >
                        <?php echo anchor("repairs/display/$field_name/" . (($sort_order == 'asc' && $field_name == $sort_by) ? 'desc' : 'asc') , $field_display); ?>
                    </th>
                <?php endforeach; ?>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($repairs as $repair): ?>
                <tr>
                    <td>
                        <?php echo anchor('repairs/edit/' . $repair['id'],'<i class="icon-edit"></i>', array('title'=>'редактировать')); ?>
                    </td>
                    <?php foreach ($fields as $field_name => $field_display) : ?>
                        <td><?php echo $repair[$field_name] ?></td>
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
