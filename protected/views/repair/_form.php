<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'repair-form',
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
        'htmlOptions' => array())
));
?>





<?php echo $form->LabelEx($model, 'department_id'); ?>
<?php if (!empty($department)) { ?>  <!-- แก้ไข undefined variable -->
    <?php echo $form->dropDownList($model, 'department_id', CHtml::listData($department, 'id', 'department_name'), array('class' => 'form-control')); ?></br>
<?php } ?>  <!-- แก้ไข undefined variable -->




<?php
echo $form->dropDownListGroup($model, 'device', array(
    'widgetOptions' => array(
        'data' => array(
            "Computer" => "Computer",
            "Notebook" => "Notebook",
            "Printer" => "Printer",
            "Scanner" => "Scanner",
            "UPS" => "UPS",),
        'htmlOptions' => array(
            'class' => 'input-large'
        ))
));
?>




<?php echo $form->textFieldGroup($model, 'total', array('widgetOptions' => array('htmlOptions' => array()))); ?>

<?php echo $form->textFieldGroup($model, 'detail', array('widgetOptions' => array('htmlOptions' => array('maxlength' => 45)))); ?>




<?php
echo $form->dropDownListGroup($model, 'shop', array(
    'widgetOptions' => array(
        'data' => array(
            "Hytron" => "Hytron",
            "JNN" => "JNN",
            "JJ" => "JJ",
        ), 'htmlOptions' => array(
            'class' => 'input-large'
        ))
));
?>




<?php
echo $form->dropDownListGroup($model, 'status', array('widgetOptions' => array(
        'data' => array(
            "ส่งซ่อม" => "ส่งซ่อม",
            "ซ่อมเสร็จ" => "ซ่อมเสร็จ",
        ), 'htmlOptions' => array(
            'class' => 'input-large'
        ))
));
?>




<div class="form-actions">
    <center><?php
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'submit',
            'context' => 'primary',
            'label' => $model->isNewRecord ? 'บันทึกส่งซ่อม' : 'Save',
        ));
        ?>
    </center>
</div>

<?php $this->endWidget(); ?>
