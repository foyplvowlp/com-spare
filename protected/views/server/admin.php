<?php
$this->breadcrumbs = array(
    'Servers' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Server', 'url' => array('index')),
    array('label' => 'Create Server', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('server-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Servers</h1>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'server-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'id',
        'date',
        'name',
        'type',
        'department_id',
        'total',
        'howto',
        'finish',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
