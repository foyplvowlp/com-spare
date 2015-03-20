<?php

$this->breadcrumbs = array(
    'Repairs',
);

$this->menu = array(
    array('label' => 'รายละเอียดส่งซ่อม', 'url' => array('create')),
    array('label' => 'จัดการรายการส่งซ่อม', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-warning">
        <H2>รายละเอียดส่งซ่อม</h2>
    </div>
</center>

<?php

$this->widget('booster.widgets.TbListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
