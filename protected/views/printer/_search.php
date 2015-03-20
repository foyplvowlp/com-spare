<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

		<?php echo $form->datePickerGroup($model,'date',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array()), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

		<?php echo $form->textFieldGroup($model,'department_id',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

		<?php echo $form->dropDownListGroup($model,'type', array('widgetOptions'=>array('data'=>array("เปลี่ยนหมึก Printer"=>"เปลี่ยนหมึก Printer","ติดตั้ง Printer"=>"ติดตั้ง Printer","ย้าย Printer"=>"ย้าย Printer","เติมหมึก Printer"=>"เติมหมึก Printer","แก้ไขปัญหา อื่นๆ"=>"แก้ไขปัญหา อื่นๆ",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

		<?php echo $form->dropDownListGroup($model,'ink', array('widgetOptions'=>array('data'=>array("HP 1102"=>"HP 1102","HP M1132"=>"HP M1132","Cannon"=>"Cannon","85A"=>"85A","35A"=>"35A","12A"=>"12A","LQ300"=>"LQ300","LQ590"=>"LQ590","TLP 2844"=>"TLP 2844","หมึกเติม"=>"หมึกเติม",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

		<?php echo $form->textFieldGroup($model,'total',array('widgetOptions'=>array('htmlOptions'=>array()))); ?>

		<?php echo $form->textFieldGroup($model,'howto',array('widgetOptions'=>array('htmlOptions'=>array('maxlength'=>200)))); ?>

		<?php echo $form->dropDownListGroup($model,'finish', array('widgetOptions'=>array('data'=>array("สำเร็จ"=>"สำเร็จ","ไม่สำเร็จ"=>"ไม่สำเร็จ","รอดำเนินการ"=>"รอดำเนินการ",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
