<?php
$this->breadcrumbs = array(
    'Computers' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Computer', 'url' => array('index')),
    array('label' => 'Create Computer', 'url' => array('create')),
    array('label' => 'View Computer', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage Computer', 'url' => array('admin')),
);
?>

<h1>Update Computer <?php echo $model->id; ?></h1>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>