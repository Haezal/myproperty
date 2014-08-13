<?php
/* @var $this PayBillsController */
/* @var $model PayBills */

$this->breadcrumbs=array(
	'Pay Bills'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PayBills', 'url'=>array('index')),
	array('label'=>'Create PayBills', 'url'=>array('create')),
	array('label'=>'View PayBills', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PayBills', 'url'=>array('admin')),
);
?>

<h1>Update PayBills <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array(
    'model'=>$model,
    'months'=>$months,
    'payLists'=>$payLists,
)); ?>