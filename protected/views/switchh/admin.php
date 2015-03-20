<?php
$this->breadcrumbs = array(
    'Switchhs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Switchh', 'url' => array('index')),
    array('label' => 'Create Switchh', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('switchh-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Switchhs</h1>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'switchh-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'id',
        'date',
        'department_id',
        'type',
        'total',
        'howto',
        'finish',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
