<?php
$this->breadcrumbs=array(
	'Report Etcs'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List ReportEtc','url'=>array('index')),
array('label'=>'Create ReportEtc','url'=>array('create')),
array('label'=>'Update ReportEtc','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete ReportEtc','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage ReportEtc','url'=>array('admin')),
);
?>

<h1>View ReportEtc #<?php echo $model->id; ?></h1>

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
