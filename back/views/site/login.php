<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>


<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => false,
        'validateOnType' => false,
    ),
    'errorMessageCssClass'=>'label label-danger',
    'htmlOptions' => array(
        'class' => 'login-form'
    )
)); ?>
<h3 class="text-center">Login</h3>

<div class="form-group">
    <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'username'); ?>
</div>

<div class="form-group">
    <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'password'); ?>

</div>
<div class="checkbox">
    <?php echo $form->checkBox($model, 'rememberMe'); ?>
    <?php echo $form->label($model, 'rememberMe'); ?>
    <?php echo $form->error($model, 'rememberMe'); ?>
</div>

<div class="text-center ">
    <?php echo CHtml::submitButton('Sign in', array('class' => 'btn btn-lg btn-block')); ?>
</div>

<?php $this->endWidget(); ?>
