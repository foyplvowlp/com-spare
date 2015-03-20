<?php
$this->breadcrumbs = array(
    'Programs' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Program', 'url' => array('index')),
    array('label' => 'Create Program', 'url' => array('create')),
    array('label' => 'Update Program', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Program', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Program', 'url' => array('admin')),
);
?>

<h1>View Program #<?php echo $model->id; ?></h1>

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        //'id',
        'date',
        'department.department_name',
        'type',
        'total',
        'howto',
        'finish',
    ),
));
?>
