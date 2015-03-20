<?php
$this->breadcrumbs=array(
	'Computers',
);

$this->menu=array(
array('label'=>'Create Computer','url'=>array('create')),
array('label'=>'Manage Computer','url'=>array('admin')),
);
?>

<h1>Computers</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
