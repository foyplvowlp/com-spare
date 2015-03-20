<?php
$this->breadcrumbs=array(
	'Ups'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Ups','url'=>array('index')),
	array('label'=>'Create Ups','url'=>array('create')),
	array('label'=>'View Ups','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Ups','url'=>array('admin')),
	);
	?>

	<h1>Update Ups <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>