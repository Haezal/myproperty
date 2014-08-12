<?php
/* @var $this PropertyTenantsController */
/* @var $model PropertyTenants */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'property-tenants-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_more'); ?>
		<?php echo $form->textField($model,'address_more',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address_more'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->textField($model,'state_id'); ?>
		<?php echo $form->error($model,'state_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_no'); ?>
		<?php echo $form->textField($model,'phone_no', array('maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'more_phone_no'); ?>
		<?php echo $form->textField($model,'more_phone_no', array('maxlength'=>20)); ?>
		<?php echo $form->error($model,'more_phone_no'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'move_in_date'); ?>
		<?php echo $form->textField($model,'move_in_date'); ?>
		<?php echo $form->error($model,'move_in_date'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'deposit'); ?>
		<?php echo $form->textField($model,'deposit'); ?>
		<?php echo $form->error($model,'deposit'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->