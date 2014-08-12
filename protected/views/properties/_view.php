<?php
/* @var $this PropertiesController */
/* @var $data Properties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user->profile->first_name); ?>,&nbsp;
	<?php echo CHtml::encode($data->user->profile->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->propertyType->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->propertyStatus->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_more')); ?>:</b>
	<?php echo CHtml::encode($data->address_more); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_id')); ?>:</b>
	<?php echo CHtml::encode($data->state->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>
    <div style="float:right;">
        <?php echo CHtml::link('View more &raquo;', array('view', 'id'=>$data->id)); ?>
    </div>
    <div class="clearfix"></div>
</div>