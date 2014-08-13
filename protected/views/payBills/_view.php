<?php
/* @var $this PayBillsController */
/* @var $data PayBills */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_id')); ?>:</b>
	<?php echo CHtml::encode($data->bill_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month_id')); ?>:</b>
	<?php echo CHtml::encode($data->month_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_date')); ?>:</b>
	<?php echo CHtml::encode($data->bill_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_date')); ?>:</b>
	<?php echo CHtml::encode($data->from_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_due')); ?>:</b>
	<?php echo CHtml::encode($data->amount_due); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_pay')); ?>:</b>
	<?php echo CHtml::encode($data->is_pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_list_id')); ?>:</b>
	<?php echo CHtml::encode($data->pay_list_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_date')); ?>:</b>
	<?php echo CHtml::encode($data->payment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>