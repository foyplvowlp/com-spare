<?php
$this->breadcrumbs=array(
	'Wifis'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Wifi','url'=>array('index')),
array('label'=>'Create Wifi','url'=>array('create')),
array('label'=>'Update Wifi','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Wifi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Wifi','url'=>array('admin')),
);
?>

<h1>View Wifi #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'date',
		'department.department_name',
		'type',
		'total',
		'howto',
		'finish',
),
)); ?>
