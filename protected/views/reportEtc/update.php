<?php
$this->breadcrumbs = array(
    'Report Etcs' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List ReportEtc', 'url' => array('index')),
    array('label' => 'Create ReportEtc', 'url' => array('create')),
    array('label' => 'View ReportEtc', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage ReportEtc', 'url' => array('admin')),
);
?>

<h1>Update ReportEtc <?php echo $model->id; ?></h1>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>