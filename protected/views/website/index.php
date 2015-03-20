<?php
$this->breadcrumbs=array(
	'Websites',
);

$this->menu=array(
array('label'=>'Create Website','url'=>array('create')),
array('label'=>'Manage Website','url'=>array('admin')),
);
?>

<h1>Websites</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
