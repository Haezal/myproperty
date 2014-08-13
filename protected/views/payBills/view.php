<?php
/* @var $this PayBillsController */
/* @var $model PayBills */

$this->breadcrumbs=array(
	'Pay Bills'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PayBills', 'url'=>array('index')),
	array('label'=>'Create PayBills', 'url'=>array('create')),
	array('label'=>'Update PayBills', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PayBills', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PayBills', 'url'=>array('admin')),
);
?>

<h1>View PayBills #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bill_id',
		'month_id',
		'year',
		'bill_date',
		'from_date',
		'end_date',
		'amount_due',
		'is_pay',
		'pay_list_id',
		'payment_date',
		'is_active',
		'created',
		'modified',
		'created_by',
		'modified_by',
	),
)); ?>
