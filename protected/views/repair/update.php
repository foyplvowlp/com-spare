<?php
$this->breadcrumbs = array(
    'Repairs' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'รายละเอียดส่งซ่อม', 'url' => array('index')),
    array('label' => 'บันทึกส่งซ่อม', 'url' => array('create')),
    array('label' => 'ดูรายละเอียด', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'จัดการรายการส่งซ่อม', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>แก้ไขรายการส่งซ่อม<?php echo $model->id; ?></h2>
    </div>
</center>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>