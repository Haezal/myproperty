<?php
/* @var $this PayBillsController */
/* @var $model PayBills */

$this->breadcrumbs=array(
	'Pay Bills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Bills', 'url'=>array('/bills')),
	array('label'=>'Pay Lists', 'url'=>array('admin')),
);
?>

<h1>Create PayBills</h1>

<?php $this->renderPartial('_form', array(
    'model'=>$model,
    'months'=>$months,
    'payLists'=>$payLists,
    )); ?>