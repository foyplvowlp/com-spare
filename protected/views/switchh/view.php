<?php
$this->breadcrumbs=array(
	'Switchhs'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Switchh','url'=>array('index')),
array('label'=>'Create Switchh','url'=>array('create')),
array('label'=>'Update Switchh','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Switchh','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Switchh','url'=>array('admin')),
);
?>

<h1>View Switchh #<?php echo $model->id; ?></h1>

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
