<?php
$this->breadcrumbs = array(
    'Switchhs' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Switchh', 'url' => array('index')),
    array('label' => 'Create Switchh', 'url' => array('create')),
    array('label' => 'View Switchh', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Switchh', 'url' => array('admin')),
);
?>

<h1>Update Switchh <?php echo $model->id; ?></h1>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>