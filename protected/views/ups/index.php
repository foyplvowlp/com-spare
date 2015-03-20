<?php
$this->breadcrumbs=array(
	'Ups',
);

$this->menu=array(
array('label'=>'Create Ups','url'=>array('create')),
array('label'=>'Manage Ups','url'=>array('admin')),
);
?>

<h1>Ups</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
