<?php
/* @var $this PayBillsController */
/* @var $model PayBills */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pay-bills-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'month_id'); ?>
		<?php echo $form->dropDownList($model,'month_id',$months,array('empty'=>'- Choose -')); ?>
		<?php echo $form->error($model,'month_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bill_date'); ?>
		<?php echo $form->textField($model,'bill_date'); ?>
		<?php echo $form->error($model,'bill_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_date'); ?>
		<?php echo $form->textField($model,'from_date'); ?>
		<?php echo $form->error($model,'from_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount_due'); ?>
		<?php echo $form->textField($model,'amount_due',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'amount_due'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_pay'); ?>
		<?php echo $form->checkBox($model,'is_pay'); ?>
		<?php echo $form->error($model,'is_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_list_id'); ?>
		<?php echo $form->dropDownList($model,'pay_list_id',$payLists,array('empty'=>'- Choose -')); ?>
		<?php echo $form->error($model,'pay_list_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payment_date'); ?>
		<?php echo $form->textField($model,'payment_date'); ?>
		<?php echo $form->error($model,'payment_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->