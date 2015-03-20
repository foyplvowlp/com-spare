<?php
$this->breadcrumbs = array(
    'Internets' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Internet', 'url' => array('index')),
    array('label' => 'Create Internet', 'url' => array('create')),
    array('label' => 'View Internet', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Internet', 'url' => array('admin')),
);
?>

<h1>Update Internet <?php echo $model->id; ?></h1>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>