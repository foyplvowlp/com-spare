<?php
$this->breadcrumbs=array(
	'Lans'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Lan','url'=>array('index')),
array('label'=>'Create Lan','url'=>array('create')),
array('label'=>'Update Lan','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Lan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Lan','url'=>array('admin')),
);
?>

<h1>View Lan #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'date',
		'department.department.name',
		'total',
		'howto',
		'finish',
		'type',
),
)); ?>
