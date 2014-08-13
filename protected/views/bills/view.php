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
    array('label'=>'Pay Bills', 'url'=>array('payBills/admin', 'id'=>$model->id)),
);
?>

<h1>View Bills #<?php echo $model->id; ?></h1>
<?php echo $this->renderPartial('_propertyDetails', array('model'=>$model->property));?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array(
            'name'=>'bill_type_id', 
            'value'=>(isset($model->billType))?$model->billType->name:null,
        ),
		'account_no',
		'collateral',
	),
)); ?>
