<?php

$this->breadcrumbs = array(
    'Wifis' => array('index'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List Wifi', 'url' => array('index')),
    //array('label' => 'Manage Wifi', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (Wifi)</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>