<?php
$this->breadcrumbs = array(
    'Internets' => array('index'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List Internet', 'url' => array('index')),
    //array('label' => 'Manage Internet', 'url' => array('admin')),
);
?>

<center>
<div class="alert alert-info">
    <H2>บันทึกประจำวัน (Internet)</h2>
</div>
</center>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>