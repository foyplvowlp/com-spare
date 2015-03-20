<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'viruss-form',
    'enableAjaxValidation' => false,
        ));
?>

<center><p class="help-block">กรอกข้อมูลในช่องที่มี <span class="required">*</span> ให้ครบ</p></center>

<?php echo $form->errorSummary($model); ?>

<?php
echo $form->datePickerGroup($model, 'date', array('widgetOptions' => array(
        'options' => array(
            'language' => 'th',
            'autoclose' => TRUE,
            'format' => 'yyyy-mm-dd',
        ),
        'htmlOptions' => array()),
));
?>




<?php echo $form->LabelEx($model, 'department_id'); ?>
<?php if (!empty($department)) { ?>  <!-- แก้ไข undefined variable -->
    <?php echo $form->dropDownList($model, 'department_id', CHtml::listData($department, 'id', 'department_name'), array('class' => 'form-control')); ?></br>
<?php } ?>  <!-- แก้ไข undefined variable -->




<?php
echo $form->dropDownListGroup($model, 'type', array('widgetOptions' => array(
        'data' => array(
            "Detele Virus" => "Detele Virus",
            "Update Anty Virus" => "Update Anty Virus",
        ), 'htmlOptions' => array('class' => 'input-large'))
));
?>



<?php echo $form->textFieldGroup($model, 'total', array('widgetOptions' => array('htmlOptions' => array()))); ?>

<?php echo $form->textFieldGroup($model, 'howto', array('widgetOptions' => array('htmlOptions' => array('maxlength' => 45)))); ?>




<?php
echo $form->dropDownListGroup($model, 'finish', array('widgetOptions' => array(
        'data' => array(
            "สำเร็จ" => "สำเร็จ",
            "ไม่สำเร็จ" => "ไม่สำเร็จ",
            "รอดำเนินการ" => "รอดำเนินการ",
        ), 'htmlOptions' => array(
            'class' => 'input-large'
        ))
));
?>




<div class="form-actions">
    <center>
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'submit',
            'context' => 'primary',
            'label' => $model->isNewRecord ? 'บันทึก' : 'Save',
        ));
        ?>
    </center>
</div>

<?php $this->endWidget(); ?>
