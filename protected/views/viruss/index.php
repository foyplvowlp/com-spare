<?php
$this->breadcrumbs=array(
	'Virusses',
);

$this->menu=array(
array('label'=>'Create Viruss','url'=>array('create')),
array('label'=>'Manage Viruss','url'=>array('admin')),
);
?>

<h1>Virusses</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
