<?php
/* @var $this PayBillsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pay Bills',
);

$this->menu=array(
	array('label'=>'Create PayBills', 'url'=>array('create')),
	array('label'=>'Manage PayBills', 'url'=>array('admin')),
);
?>

<h1>Pay Bills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
