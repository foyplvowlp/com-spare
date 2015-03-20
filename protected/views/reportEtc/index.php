<?php
$this->breadcrumbs=array(
	'Report Etcs',
);

$this->menu=array(
array('label'=>'Create ReportEtc','url'=>array('create')),
array('label'=>'Manage ReportEtc','url'=>array('admin')),
);
?>

<h1>Report Etcs</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
