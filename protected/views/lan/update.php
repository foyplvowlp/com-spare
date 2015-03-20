<?php
$this->breadcrumbs = array(
    'Lans' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Lan', 'url' => array('index')),
    array('label' => 'Create Lan', 'url' => array('create')),
    array('label' => 'View Lan', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Lan', 'url' => array('admin')),
);
?>

<h1>Update Lan <?php echo $model->id; ?></h1>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>