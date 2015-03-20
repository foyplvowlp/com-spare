<?php

$this->breadcrumbs = array(
    'Report Etcs' => array('index'),
    'Create',
);

$this->menu = array(
        //array('label' => 'List ReportEtc', 'url' => array('index')),
        //array('label' => 'Manage ReportEtc', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (Document)</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>