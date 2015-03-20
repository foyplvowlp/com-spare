<?php
$this->breadcrumbs = array(
    'Repairs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'รายละเอียดส่งซ่อม', 'url' => array('index')),
    array('label' => 'จัดการรายการส่งซ่อม', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('repair-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<center>
    <div class="alert alert-success">
        <H2>จัดการรายการส่งซ่อม</h2>
    </div>
</center>


<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'summaryText' => 'Displaying {start}-{end} of {count} results.',
    'template' => "{summary}\n{pager}\n{items}\n{pager}",
    'filter' => $model,
    'columns' => array(
        'id',
        array(
            'name' => 'department_id',
            'value' => '$data->department->department_name',
            'filter' => CHtml::listData(Department::model()->findAll(), 'id', 'department_name'),
            'htmlOptions' => array('style' => 'width: 140px'),
        ),
        'device',
        'date',
        'total',
        'detail',
        'shop',
        'status',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
            'template' => '{view} {update} {delete}' //removed ''
        ),
    ),
));
?>
