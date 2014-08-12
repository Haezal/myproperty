<?php
/* @var $this BillsController */
/* @var $data Bills */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->billType->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_no')); ?>:</b>
	<?php echo CHtml::encode($data->account_no); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('collateral')); ?>:</b>
	<?php echo CHtml::encode($data->collateral); ?>
	<br />
*/?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo ($data->is_active==1)?"Active":"Inactive"; ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>
    <div style="float:right;">
        <?php echo CHtml::link('View more &raquo;', array('view', 'id'=>$data->id)); ?>
    </div>
    <div class="clearfix"></div>
</div>