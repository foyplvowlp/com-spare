<?php
$this->breadcrumbs=array(
	'Switchhs',
);

$this->menu=array(
array('label'=>'Create Switchh','url'=>array('create')),
array('label'=>'Manage Switchh','url'=>array('admin')),
);
?>

<h1>Switchhs</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
