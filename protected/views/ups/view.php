<?php
$this->breadcrumbs=array(
	'Ups'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Ups','url'=>array('index')),
array('label'=>'Create Ups','url'=>array('create')),
array('label'=>'Update Ups','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Ups','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Ups','url'=>array('admin')),
);
?>

<h1>View Ups #<?php echo $model->id; ?></h1>

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
