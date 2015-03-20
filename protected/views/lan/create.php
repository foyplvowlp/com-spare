<?php

$this->breadcrumbs = array(
    'Lans' => array('index'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List Lan', 'url' => array('index')),
    //array('label' => 'Manage Lan', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (LAN)</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>