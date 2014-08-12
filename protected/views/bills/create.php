<?php
/* @var $this BillsController */
/* @var $model Bills */

$this->breadcrumbs=array(
	'Bills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bills', 'url'=>array('index')),
	array('label'=>'Manage Bills', 'url'=>array('admin')),
);
?>

<h1>Create Bills</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>