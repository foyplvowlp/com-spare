<?php

$this->breadcrumbs = array(
    'Ups' => array('index'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List Ups', 'url' => array('index')),
    //array('label' => 'Manage Ups', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (UPS)</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>