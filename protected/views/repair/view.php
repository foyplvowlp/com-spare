<?php
$this->breadcrumbs = array(
    'Repairs' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'รายละเอียดส่งซ่อม', 'url' => array('index')),
    array('label' => 'บันทึกส่งซ่อม', 'url' => array('create')),
    array('label' => 'แก้ไขรายการ', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'ลบ', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'จัดการรายการส่งซ่อม', 'url' => array('admin')),
);
?>

<h1>View Repair #<?php echo $model->id; ?></h1>

<?php
$this->widget('booster.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        //'id',
        'department.department_name',
        'device',
        'date',
        'total',
        'detail',
        'shop',
        'status',
    ),
));
?>
