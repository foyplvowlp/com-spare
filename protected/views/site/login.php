<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<center>
    <h1>เข้าสู่ระบบ</h1>

    <p class="note">กรุณาใส่ข้อมูลในช่องที่มีเครื่องหมาย <span class="required">*</span> ให้ครบทุกช่อง</p>
</center>

<div class="form">
    <?php
    $form = $this->beginWidget(
            'ext.booster.widgets.TbActiveForm', array(
        'id' => 'verticalForm',
        'htmlOptions' => array('class' => 'well'), // for inset effect
            )
    );

    echo $form->textFieldGroup($model, 'username');
    echo $form->passwordFieldGroup($model, 'password');
    echo $form->checkboxGroup($model, 'rememberMe');
    $this->widget(
            'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'เข้าสู่ระบบ')
    );

    $this->endWidget();
    unset($form);
    ?>

    <hr


</div><!-- form -->
