<?php
/* @var $this PropertiesController */
/* @var $model Properties */

$this->breadcrumbs=array(
	'Properties'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Properties', 'url'=>array('index')),
);
?>

<h1><span class="glyphicon glyphicon-calender"></span> Calendar View</h1>

<h3>
	Current Year : <?php echo $currentYear; ?> <span class="glyphicon glyphicon-pencil"></span> Kemaskini
</h3>