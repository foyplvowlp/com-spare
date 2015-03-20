<?php
$this->breadcrumbs=array(
	'Wifis',
);

$this->menu=array(
array('label'=>'Create Wifi','url'=>array('create')),
array('label'=>'Manage Wifi','url'=>array('admin')),
);
?>

<h1>Wifis</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
