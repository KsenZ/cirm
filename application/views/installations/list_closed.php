<div class="span10">
    <div class="content">
        <legend>Список выполненых установок</legend>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th></th>
                    <?php foreach ($fields as $field_name => $field_display) : ?>
                        <th <?php if ($sort_by == $field_name) echo "class=\"sort-$sort_order\""; ?> >
                            <?php echo anchor("installations/display/$field_name/" . (($sort_order == 'asc' && $field_name == $sort_by) ? 'desc' : 'asc') , $field_display); ?>
                        </th>
                        <?php endforeach; ?>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($installations as $installation): ?>
                    <tr>
                        <td>
                            <?php echo anchor('installations/view_closed/' . $installation['id'],'<i class="icon-eye-open"></i>', array('title'=>'Просмотреть')); ?>
                        </td>
                        <?php foreach ($fields as $field_name => $field_display) : ?>
                            <td><?php echo $installation[$field_name] ?></td>
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
