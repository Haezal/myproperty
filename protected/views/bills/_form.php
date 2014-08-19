<?php
/* @var $this BillsController */
/* @var $model Bills */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'bills-form',
	'type'=>'horizontal',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
		<?php echo $form->dropDownListGroup($model, 'bill_type_id', array(
			'wrapperHtmlOptions'=>array('class'=>'col-md-4'),
			'widgetOptions'=>array('data'=>CHtml::listData(BillTypes::model()->findAll(), 'id', 'name')),
		)); ?>

		<?php echo $form->textFieldGroup($model,'account_no',array('wrapperHtmlOptions'=>array('class'=>'col-md-5'),'maxlength'=>50)); ?>
		<?php echo $form->textFieldGroup($model,'old_account_no',array('wrapperHtmlOptions'=>array('class'=>'col-md-5'),'maxlength'=>50)); ?>
		<?php echo $form->textFieldGroup($model,'collateral',array('wrapperHtmlOptions'=>array('class'=>'col-md-2'),'maxlength'=>11, 'prepend'=>'RM')); ?>
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