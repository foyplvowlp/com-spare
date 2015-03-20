<?php

$this->breadcrumbs = array(
    'Computers' => array('index'),
    'Create',
);

$this->menu = array(
 //   array('label' => 'List Computer', 'url' => array('index')),
 //   array('label' => 'Manage Computer', 'url' => array('admin')),
);
?>

<center>
    <div class="alert alert-info">
        <H2>บันทึกประจำวัน (Computer)</h2>
    </div>
</center>

<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>