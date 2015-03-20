<?php
$this->breadcrumbs = array(
    'Virusses' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Viruss', 'url' => array('index')),
    array('label' => 'Create Viruss', 'url' => array('create')),
    array('label' => 'View Viruss', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Viruss', 'url' => array('admin')),
);
?>

<h1>Update Viruss <?php echo $model->id; ?></h1>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>