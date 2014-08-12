<?php
/* @var $this BillsController */
/* @var $model Bills */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bills-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
	<div class="row">
		<?php echo $form->labelEx($model,'bill_type_id'); ?>
		<?php echo $form->dropDownList($model,'bill_type_id', CHtml::listData(BillTypes::model()->findAll(), 'id', 'name'), array('empty'=>'- Choose -')); ?>
		<?php echo $form->error($model,'bill_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_no'); ?>
		<?php echo $form->textField($model,'account_no',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'account_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_account_no'); ?>
		<?php echo $form->textField($model,'old_account_no',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'old_account_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'collateral'); ?>
		<?php echo $form->textField($model,'collateral',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'collateral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->checkBox($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->