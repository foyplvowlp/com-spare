<?php
$this->breadcrumbs = array(
    'Computers' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Computer', 'url' => array('index')),
    array('label' => 'Create Computer', 'url' => array('create')),
    array('label' => 'Update Computer', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Computer', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Computer', 'url' => array('admin')),
);
?>

<h1>View Computer #<?php echo $model->id; ?></h1>

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        //'id',
        'date',
        'type',
        'department.department_name',
        'total',
        'howto',
        'finish',
    ),
));
?>
