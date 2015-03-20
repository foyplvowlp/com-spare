<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

		<?php echo $form->textFieldGroup($model,'department_id',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

		<?php echo $form->dropDownListGroup($model,'device', array('widgetOptions'=>array('data'=>array("Computer"=>"Computer","Notebook"=>"Notebook","Printer"=>"Printer","Scanner"=>"Scanner","UPS"=>"UPS",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

		<?php echo $form->datePickerGroup($model,'date',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array()), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

		<?php echo $form->textFieldGroup($model,'total',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

		<?php echo $form->textFieldGroup($model,'detail',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>45)))); ?>

		<?php echo $form->dropDownListGroup($model,'shop', array('widgetOptions'=>array('data'=>array("Hytron"=>"Hytron","JNN"=>"JNN","JJ"=>"JJ",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

		<?php echo $form->dropDownListGroup($model,'status', array('widgetOptions'=>array('data'=>array("ส่งซ่อม"=>"ส่งซ่อม","ซ่อมเสร็จ"=>"ซ่อมเสร็จ",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
