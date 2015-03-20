<?php
$this->breadcrumbs = array(
    'Virusses' => array('index'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List Viruss', 'url' => array('index')),
    //array('label' => 'Manage Viruss', 'url' => array('admin')),
);
?>


<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (Virus)</h2>
    </div>
</center>


<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>