<?php
$this->breadcrumbs = array(
    'Computers' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Computer', 'url' => array('index')),
    array('label' => 'Create Computer', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('computer-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Computers</h1>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'computer-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'date',
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
