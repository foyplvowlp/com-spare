<?php

$this->breadcrumbs = array(
    'Repairs' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'รายละเอียดส่งซ่อม', 'url' => array('index')),
    array('label' => 'จัดการรายการส่งซ่อม', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกส่งซ่อม</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>