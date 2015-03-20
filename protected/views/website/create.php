<?php
$this->breadcrumbs = array(
    'Websites' => array('index'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List Website', 'url' => array('index')),
    //array('label' => 'Manage Website', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (Web Site)</h2>
    </div>
</center>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>