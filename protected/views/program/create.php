<?php

$this->breadcrumbs = array(
    'Programs' => array('index'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List Program', 'url' => array('index')),
    //array('label' => 'Manage Program', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (Program)</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>