<?php
/* @var $this PropertiesController */
/* @var $model Properties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'properties-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <?php if(Yii::app()->user->isAdmin()){?>
    <div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownList($model,'user_id', $users, array('empty'=>'-- Choose --')); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>
    <?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'property_type_id'); ?>
		<?php echo $form->dropDownList($model,'property_type_id', $propertyTypes, array('empty'=>'-- Choose --')); ?>
		<?php echo $form->error($model,'property_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property_status_id'); ?>
		<?php echo $form->dropDownList($model,'property_status_id', $propertyStatuses, array('empty'=>'-- Choose --')); ?>
		<?php echo $form->error($model,'property_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_more'); ?>
		<?php echo $form->textField($model,'address_more',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'address_more'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->dropDownList($model,'state_id', $states, array('empty'=>'-- Choose --')); ?>
		<?php echo $form->error($model,'state_id'); ?>
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