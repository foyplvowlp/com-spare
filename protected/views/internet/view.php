<?php
$this->breadcrumbs=array(
	'Internets'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Internet','url'=>array('index')),
array('label'=>'Create Internet','url'=>array('create')),
array('label'=>'Update Internet','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Internet','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Internet','url'=>array('admin')),
);
?>

<h1>View Internet #<?php echo $model->id; ?></h1>

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
