<?php
$this->breadcrumbs=array(
	'Virusses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Viruss','url'=>array('index')),
array('label'=>'Create Viruss','url'=>array('create')),
array('label'=>'Update Viruss','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Viruss','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Viruss','url'=>array('admin')),
);
?>

<h1>View Viruss #<?php echo $model->id; ?></h1>

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
