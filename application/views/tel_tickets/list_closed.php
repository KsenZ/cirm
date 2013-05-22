<div class="span10">
    <div class="content">
        <legend>Список закрытых тикетов</legend>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th></th>
                    <?php foreach ($fields as $field_name => $field_display) : ?>
                        <th <?php if ($sort_by == $field_name) echo "class=\"sort-$sort_order\""; ?> >
                            <?php echo anchor("tel_tickets/display/$field_name/" . (($sort_order == 'asc' && $field_name == $sort_by) ? 'desc' : 'asc') , $field_display); ?>
                        </th>
                        <?php endforeach; ?>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($tickets as $ticket): ?>
                    <tr>
                        <td>
                            <?php echo anchor('tel_tickets/view_closed/' . $ticket['id'],'<i class="icon-eye-open"></i>', array('title'=>'Просмотреть')); ?>
                        </td>
                        <?php foreach ($fields as $field_name => $field_display) : ?>
                            <td><?php echo $ticket[$field_name] ?></td>
                            <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
        <?php 
            echo $pagination; 
        ?>
    </div>
</div><!--/span-->
