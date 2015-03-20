<?php

$this->breadcrumbs = array(
    'Printers' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Printer', 'url' => array('index')),
    array('label' => 'Manage Printer', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (Printer)</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>