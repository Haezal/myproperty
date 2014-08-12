<?php
/* @var $this BillsController */
/* @var $model Bills */

$this->breadcrumbs=array(
	'Bills'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bills', 'url'=>array('index')),
	array('label'=>'Create Bills', 'url'=>array('create')),
	array('label'=>'Update Bills', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bills', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bills', 'url'=>array('admin')),
    array('label'=>'Pay Bills', 'url'=>array('payBills/index', 'id'=>$model->id)),
);
?>

<h1>View Bills #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'property_id',
		'bill_type_id',
		'account_no',
		'collateral',
		'is_active',
		'created',
		'created_by',
		'modified',
		'modified_by',
	),
)); ?>
