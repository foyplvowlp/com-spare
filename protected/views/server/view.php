<?php
$this->breadcrumbs = array(
    'Servers' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Server', 'url' => array('index')),
    array('label' => 'Create Server', 'url' => array('create')),
    array('label' => 'Update Server', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Server', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Server', 'url' => array('admin')),
);
?>

<h1>View Server #<?php echo $model->id; ?></h1>

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        //'id',
        'date',
        'name',
        'type',
        'department.department_name',
        'total',
        'howto',
        'finish',
    ),
));
?>
