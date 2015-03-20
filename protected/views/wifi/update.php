<?php
$this->breadcrumbs = array(
    'Wifis' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Wifi', 'url' => array('index')),
    array('label' => 'Create Wifi', 'url' => array('create')),
    array('label' => 'View Wifi', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Wifi', 'url' => array('admin')),
);
?>

<h1>Update Wifi <?php echo $model->id; ?></h1>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>