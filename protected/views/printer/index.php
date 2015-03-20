<?php
$this->breadcrumbs=array(
	'Printers',
);

$this->menu=array(
array('label'=>'Create Printer','url'=>array('create')),
array('label'=>'Manage Printer','url'=>array('admin')),
);
?>

<h1>Printers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
