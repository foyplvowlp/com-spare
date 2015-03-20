<?php
$this->breadcrumbs = array(
    'Servers' => array('index'),
    'Create',
);

 // $this->menu = array(
 //   array('label' => 'List Server', 'url' => array('index')),
 //   array('label' => 'Manage Server', 'url' => array('admin')),
 //); 

?>

<center>
<div class="alert alert-info">
    <H2>บันทึกประจำวัน (Server)</h2>
</div>
</center>

<?php
echo $this->renderPartial('_form', array(
    'model' => $model,
    'department' => $department,
));
?>