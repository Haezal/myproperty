<?php
/* @var $this PropertiesController */
/* @var $model Properties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'properties-form',
	'type'=>'horizontal',
	'htmlOptions' => array('class' => 'well'), // for inset effect
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <?php if(Yii::app()->user->isAdmin()){?>
		<?php echo $form->dropDownListGroup($model,'user_id', $users, array('empty'=>'-- Choose --')); ?>
	<?php } ?>
		<?php echo $form->dropDownListGroup(
		$model,
		'property_type_id', 
		array(
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-6',
			),
			'widgetOptions'=>array(
				'data'=>$propertyTypes,
			),
		)); ?>

		<?php echo $form->dropDownListGroup(
		$model,
		'property_status_id', 
		array(
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-3',
			),
			'widgetOptions'=>array(
				'data'=>$propertyStatuses,
			),
		)); ?>

		<?php echo $form->textFieldGroup($model,'address',array('size'=>60,'maxlength'=>200)); ?>

		<?php echo $form->textFieldGroup($model,'address_more',array('size'=>60,'maxlength'=>200)); ?>

		<?php echo $form->textFieldGroup($model,'postcode',array('size'=>10,'maxlength'=>10)); ?>

		<?php echo $form->textFieldGroup($model,'city',array('size'=>60,'maxlength'=>100)); ?>

		<?php echo $form->dropDownListGroup(
		$model,
		'state_id', 
		array(
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-6',
			),
			'widgetOptions'=>array(
				'data'=>$states,
			),
		)); ?>

		<?php echo $form->checkBoxGroup($model,'is_active'); ?>
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-9">
				<?php $this->widget(
					'booster.widgets.TbButton',
					array(
						'buttonType' => 'submit',
						'context' => 'primary',
						'label' => $model->isNewRecord ? 'Create' : 'Save'
					)
				); ?>
				<?php $this->widget(
					'booster.widgets.TbButton',
					array('buttonType' => 'reset', 'label' => 'Reset')
				); ?>
			</div>
		</div>
<?php $this->endWidget(); ?>

</div><!-- form -->