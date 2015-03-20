<?php
$this->breadcrumbs=array(
	'Internets',
);

$this->menu=array(
array('label'=>'Create Internet','url'=>array('create')),
array('label'=>'Manage Internet','url'=>array('admin')),
);
?>

<h1>Internets</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
